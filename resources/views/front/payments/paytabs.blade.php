<link rel="stylesheet" href="https://www.paytabs.com/theme/express_checkout/css/express.css">
<script src="https://www.paytabs.com/theme/express_checkout/js/jquery-1.11.1.min.js"></script>
<script src="https://www.paytabs.com/express/express_checkout_v3.js"></script>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
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
 settings:{
 merchant_id: "10033954",
 secret_key: "dif7wmRdKsRGCtucXabSripAwpP98bFltVt0hld1N5IqzcCwnOpP7OqDefNmqtIUpbUGx8IkerKNEnk2bJSiyiWMxK9YeSSD4NkB",
 amount : "10.00",
 currency : "SAR",
 title : "Muhanna",
 product_names: "Product1,Product2,Product3",
 order_id: 25,
 url_redirect: "http://classic-veil.com",
 display_customer_info:1,
 display_billing_fields:1,
 display_shipping_fields:0,
 language: "en",
 redirect_on_reject: 0,
 }
 });
</script>
