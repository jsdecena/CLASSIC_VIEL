@if(isset($payment['name']))
    @if($payment['name'] == config('stripe.name'))
        @include('front.payments.paytabs')
    @elseif($payment['name'] == config('bank-transfer.name'))
        @include('front.payments.bank-transfer')
    @endif
@endif
