<?php
// config for EllisSystems/LaravelPayFast
return [
    'merchant_id' => env('PAYFAST_MERCHANT_ID', ''),
    'merchant_key' => env('PAYFAST_MERCHANT_KEY', ''),
    'passphrase' => env('PAYFAST_PASSPHRASE'),
    'testmode' => env('PAYFAST_TESTMODE', true),
    'proxy' => env('PAYFAST_PROXY'),
];
