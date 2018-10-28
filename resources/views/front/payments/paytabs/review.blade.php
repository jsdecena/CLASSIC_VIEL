@extends('layouts.front.app')

@section('content')
    <div class="container product-in-cart-list">
        <div class="row">
            <div class="col-md-12">
                <h1>Pay with Paytabs</h1>
                <h3>Please review your order below:</h3>
                <ul class="list-unstyled">
                    <li>Items: {{ config('cart.currency_symbol') }} {{ $subtotal }}</li>
                    <li>Tax: {{ config('cart.currency_symbol') }} {{ $tax }}</li>
                    <li>Shipping Fee: {{ config('cart.currency_symbol') }} {{ $shipping }}</li>
                    <li>Total: {{ config('cart.currency_symbol') }} {{ $total }}</li>
                </ul>
                <hr>
                <form action="{{route('checkout.paytabs')}}" method="post">
                    {{csrf_field()}}
                    <button type="submit" class="btn btn-primary">Pay now</button>
                </form>
            </div>
        </div>
    </div>
@endsection