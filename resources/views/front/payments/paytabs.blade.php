@section('css')
<link rel="stylesheet" href="//www.paytabs.com/theme/express_checkout/css/express.css">
@endsection

<script src="//www.paytabs.com/theme/express_checkout/js/jquery-1.11.1.min.js"></script>
<script src="//www.paytabs.com/express/express_checkout_v3.js"></script>

<!-- Button Code for PayTabs Express Checkout -->
<tr>
    <td>
        @if(isset($payment['name']))
            {{ ucwords($payment['name']) }}
        @else
            <p class="alert alert-danger">You need to have <strong>name</strong> key in your config</p>
        @endif
    </td>
    <td>
        @if(isset($payment['description']))
            {{ $payment['description'] }}
        @endif
    </td>
    <td>

        <div class="PT_express_checkout pull-right">

        </div>
    </td>
</tr>

<script type="text/javascript">
    Paytabs("#express_checkout").expresscheckout({
        settings: {
            merchant_id: "10033954",
            secret_key: "{{$paytabs['secret_key']}}",
            amount: "{{$paytabs['amount']}}",
            currency: "{{$paytabs['currency']}}",
            title: "{{$paytabs['title']}}",
            product_names: "{{$paytabs['products_per_title']}}",
            order_id: "{{$paytabs['reference_no']}}",
            url_redirect: "{{$paytabs['return_url']}}",
            display_customer_info: 1,
            display_billing_fields: 1,
            display_shipping_fields: 0,
            language: "en",
            redirect_on_reject: 0,
        }
    });
</script>
