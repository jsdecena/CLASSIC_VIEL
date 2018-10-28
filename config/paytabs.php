<?php
    return [
        'name' => 'paytabs',
        'description' => 'PAYMENTS EVERYWHERE, PAYTABS EVERYWARE',
        'url' => 'https://www.paytabs.com',
        'key' => env('PT_SECRET_KEY', 'xxxx'),
        'merchantId' => env('PT_MERCHANT_ID', 'xxxx'),
        'merchantEmail' => env('PT_MERCHANT_EMAIL', 'xxxx'),
        'redirect_url' => env('PT_REDIRECT_URL', 'http://localhost'),
        'cancel_url' => env('PT_CANCEL_URL', 'http://localhost'),
        'failed_url' => env('PT_FAILED_URL', 'http://localhost'),
    ];