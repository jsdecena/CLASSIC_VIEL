<?php

namespace App\Http\Controllers\Front;

use App\Shop\Addresses\Repositories\Interfaces\AddressRepositoryInterface;
use App\Shop\Cart\Requests\CartCheckoutRequest;
use App\Shop\Carts\Repositories\Interfaces\CartRepositoryInterface;
use App\Shop\Carts\Requests\PayPalCheckoutExecutionRequest;
use App\Shop\Carts\Requests\StripeExecutionRequest;
use App\Shop\Checkout\CheckoutRepository;
use App\Shop\Countries\Country;
use App\Shop\Couriers\Repositories\Interfaces\CourierRepositoryInterface;
use App\Shop\Customers\Customer;
use App\Shop\Customers\Repositories\CustomerRepository;
use App\Shop\Customers\Repositories\Interfaces\CustomerRepositoryInterface;
use App\Shop\Orders\Repositories\Interfaces\OrderRepositoryInterface;
use App\Shop\PaymentMethods\Paypal\Exceptions\PaypalRequestError;
use App\Shop\PaymentMethods\Paypal\Repositories\PayPalExpressCheckoutRepository;
use App\Shop\PaymentMethods\Stripe\Exceptions\StripeChargingErrorException;
use App\Shop\PaymentMethods\Stripe\StripeRepository;
use App\Shop\Products\Repositories\Interfaces\ProductRepositoryInterface;
use App\Shop\Products\Transformations\ProductTransformable;
use App\Shop\Shipping\ShippingInterface;
use Exception;
use App\Http\Controllers\Controller;
use Gloudemans\Shoppingcart\Facades\Cart;
use GuzzleHttp\Client;
use Illuminate\Http\Request;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\Log;
use PayPal\Exception\PayPalConnectionException;
use App;
use Ramsey\Uuid\Uuid;

class CheckoutController extends Controller
{
    use ProductTransformable;

    /**
     * @var CartRepositoryInterface
     */
    private $cartRepo;

    /**
     * @var CourierRepositoryInterface
     */
    private $courierRepo;

    /**
     * @var AddressRepositoryInterface
     */
    private $addressRepo;

    /**
     * @var CustomerRepositoryInterface
     */
    private $customerRepo;

    /**
     * @var ProductRepositoryInterface
     */
    private $productRepo;

    /**
     * @var OrderRepositoryInterface
     */
    private $orderRepo;

    /**
     * @var PayPalExpressCheckoutRepository
     */
    private $payPal;

    /**
     *
     */
    private $vall;

    /**
     * @var ShippingInterface
     */
    private $shippingRepo;

    public function __construct(
        CartRepositoryInterface $cartRepository,
        CourierRepositoryInterface $courierRepository,
        AddressRepositoryInterface $addressRepository,
        CustomerRepositoryInterface $customerRepository,
        ProductRepositoryInterface $productRepository,
        OrderRepositoryInterface $orderRepository,
        ShippingInterface $shipping
    ) {
        $this->cartRepo = $cartRepository;
        $this->courierRepo = $courierRepository;
        $this->addressRepo = $addressRepository;
        $this->customerRepo = $customerRepository;
        $this->productRepo = $productRepository;
        $this->orderRepo = $orderRepository;

        $payPalRepo = new PayPalExpressCheckoutRepository;
        $this->payPal = $payPalRepo;
        $this->shippingRepo = $shipping;


        $valAttr = App::make('App\Http\Controllers\Front\CartController');
        $this->vall = $valAttr;

    }

    /**
     * Display a listing of the resource.
     *
     * @param Request $request
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $products = $this->cartRepo->getCartItems();
        $customer = $request->user();
        $rates = null;
        $shipment_object_id = null;

        if (env('ACTIVATE_SHIPPING') == 1) {
            $shipment = $this->createShippingProcess($customer, $products);
            if (!is_null($shipment)) {
                $shipment_object_id = $shipment->object_id;
                $rates = $shipment->rates;
            }
        }

        // Get payment gateways
        $paymentGateways = collect(explode(',', config('payees.name')))->transform(function ($name) {
            return config($name);
        })->all();

        $billingAddress = $customer->addresses()->first();

        $shippingAddress = $customer->addresses()->first(); // You need to implement the shipping address
        $country = Country::find($billingAddress->country_id);

        $cartItems = $this->cartRepo->getCartItems()->pluck('name')->implode('||');
        $cartItemsPrices = $this->cartRepo->getCartItems()->pluck('price')->implode('||');
        $cartItemsQuantity = $this->cartRepo->getCartItems()->pluck('qty')->implode('||');

        $shipping = 0.00;

        $paytabs = [
            'merchant_email' => config('paytabs.merchantEmail'),
            'secret_key' => config('paytabs.key'),
            'title' => $customer->name,
            'cc_first_name' => $customer->name, // You need to modify customer's table with fname and lname
            'cc_last_name' => $customer->name, // You need to modify customer's table with fname and lname
            'email' => $customer->email,
            'cc_phone_number' => '973', //You need to have a mobile column in customers table
            'phone_number' => '33333333',
            'billing_address' => $billingAddress->address_1,
            'city' => $billingAddress->city,
            'state' => $billingAddress->state_code,
            'postal_code' => $billingAddress->zip,
            'country' => $country->iso3,
            'address_shipping' => $shippingAddress->address_1,
            'city_shipping' => $shippingAddress->city,
            'state_shipping' => $shippingAddress->state_code,
            'postal_code_shipping' => $shippingAddress->zip,
            'country_shipping' => $country->iso3,
            'products_per_title' => $cartItems,
            'currency' => config('cart.currency'),
            'unit_price' => $cartItemsPrices,
            'quantity' => $cartItemsQuantity,
            'other_charges' => $shipping,
            'amount' => $this->cartRepo->getTotal(2, $shipping),
            'discount' => 0,
            'msg_lang' => 'english',
            'reference_no' => '1231231',
            'site_url' => config('app.url'),
            'return_url' => config('app.url') . config('paytabs.redirect_url'),
            'cms_with_version' => 'API USING PHP'
        ];

        return view('front.checkout', [
            'customer' => $customer,
            'billingAddress' => $billingAddress,
            'addresses' => $customer->addresses()->get(),
            'products' => $this->cartRepo->getCartItems(),
            'subtotal' => $this->cartRepo->getSubTotal(),
            'tax' => $this->cartRepo->getTax(),
            'total' => $this->cartRepo->getTotal(2),
            'payments' => $paymentGateways,
            'cartItems' => $this->cartRepo->getCartItemsTransformed(),
            'shipment_object_id' => $shipment_object_id,
            'attr' => 2,
            'rates' => $rates,
            'paytabs' => $paytabs
        ]);
    }

    /**
     * Checkout the items
     *
     * @param CartCheckoutRequest $request
     *
     * @return \Illuminate\Http\RedirectResponse
     * @codeCoverageIgnore
     * @throws \App\Shop\Customers\Exceptions\CustomerPaymentChargingErrorException
     */
    public function store(CartCheckoutRequest $request)
    {
        $shippingFee = 0;

        switch ($request->input('payment')) {
            case 'paypal':
                return $this->payPal->process($shippingFee, $request);
                break;
            case 'paytabs':
                return $this->paytabs->process($shippingFee, $request);
                break;
            case 'stripe':

                $details = [
                    'description' => 'Stripe payment',
                    'metadata' => $this->cartRepo->getCartItems()->all()
                ];

                $customer = $this->customerRepo->findCustomerById(auth()->id());
                $customerRepo = new CustomerRepository($customer);
                $customerRepo->charge($this->cartRepo->getTotal(2, $shippingFee), $details);
                break;
            default:
        }
    }

    /**
     * Execute the PayPal payment
     *
     * @param PayPalCheckoutExecutionRequest $request
     *
     * @return \Illuminate\Http\RedirectResponse
     */
    public function executePayPalPayment(PayPalCheckoutExecutionRequest $request)
    {
        try {
            $this->payPal->execute($request);
            $this->cartRepo->clearCart();

            return redirect()->route('checkout.success');
        } catch (PayPalConnectionException $e) {
            throw new PaypalRequestError($e->getData());
        } catch (Exception $e) {
            throw new PaypalRequestError($e->getMessage());
        }
    }


    /**
     * @param StripeExecutionRequest $request
     *
     * @return \Stripe\Charge
     */
    public function charge(StripeExecutionRequest $request)
    {
        try {
            $customer = $this->customerRepo->findCustomerById(auth()->id());
            $stripeRepo = new StripeRepository($customer);

            $stripeRepo->execute(
                $request->all(),
                Cart::total(),
                Cart::tax()
            );
            return redirect()->route('checkout.success')->with('message', 'Stripe payment successful!');
        } catch (StripeChargingErrorException $e) {
            Log::info($e->getMessage());
            return redirect()->route('checkout.index')->with('error', 'There is a problem processing your request.');
        }
    }

    /**
     * @param Request $request
     *
     * @return \Illuminate\Http\RedirectResponse
     */
    public function processPaytabs(Request $request)
    {
        $customer = $request->user();
        $billingAddress = $customer->addresses()->first();
        $checkoutRepo = new CheckoutRepository;

        $shipping = 0.00;
        $tax = 0.00;
        $checkoutRepo->buildCheckoutItems([
            'reference' => $request->input('transaction_id'),
            'courier_id' => 1,
            'customer_id' => $customer->id,
            'address_id' => $billingAddress->id,
            'order_status_id' => 1,
            'payment' => strtolower(config('paytabs.name')),
            'discounts' => 0,
            'total_products' => $this->cartRepo->getSubTotal(),
            'total' => $this->cartRepo->getTotal(2, $shipping),
            'total_paid' => $request->input('transaction_amount'),
            'tax' => $tax
        ]);

        Cart::destroy();

        return redirect()->route('checkout.success');
    }

    /**
     * Cancel page
     *
     * @param Request $request
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function cancel(Request $request)
    {
        return view('front.checkout-cancel', ['data' => $request->all()]);
    }

    /**
     * Success page
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function success()
    {
        return view('front.checkout-success');
    }

    /**
     * @param Customer $customer
     * @param Collection $products
     *
     * @return mixed
     */
    private function createShippingProcess(Customer $customer, Collection $products)
    {
        $customerRepo = new CustomerRepository($customer);

        if ($customerRepo->findAddresses()->count() > 0 && $products->count() > 0) {

            $this->shippingRepo->setPickupAddress();
            $deliveryAddress = $customerRepo->findAddresses()->first();
            $this->shippingRepo->setDeliveryAddress($deliveryAddress);
            $this->shippingRepo->readyParcel($this->cartRepo->getCartItems());

            return $this->shippingRepo->readyShipment();
        }
    }
}
