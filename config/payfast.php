<?php
// config for EllisSystems/LaravelPayFast
return [
    'merchant_id' => env('PAYFAST_MERCHANT_ID', '10026426'),
    'merchant_key' => env('PAYFAST_MERCHANT_KEY', 'nkoq82zstric8'),
    'passphrase' => env('PAYFAST_PASSPHRASE', 'PfN9Xxxh5TUK4xwFs'),
    'testmode' => env('PAYFAST_TESTMODE', true),
    'proxy' => env('PAYFAST_PROXY'),
];
