<?php

namespace App\Shop\Checkout;

use App\Shop\Orders\Order;
use App\Shop\Orders\Repositories\OrderRepository;

class CheckoutRepository
{
    /**
     * @param array $data
     *
     * @return Order
     */
    public function buildCheckoutItems(array $data) : Order
    {
        $orderRepo = new OrderRepository(new Order);

        return $orderRepo->createOrder([
            'reference' => $data['reference'],
            'courier_id' => $data['courier_id'],
            'customer_id' => $data['customer_id'],
            'address_id' => $data['address_id'],
            'order_status_id' => $data['order_status_id'],
            'payment' => $data['payment'],
            'discounts' => $data['discounts'],
            'total_products' => $data['total_products'],
            'total' => $data['total'],
            'total_paid' => $data['total_paid'],
            'tax' => $data['tax']
        ]);
    }
}
