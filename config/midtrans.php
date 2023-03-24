<?php
 
return [
    'mercant_id' => env('MIDTRANS_MERCHAT_ID'),
    'client_key' => env('Mid-client-Idsoeet-r618qzHL'),
    'server_key' => env('MIDTRANS_SERVER_KEY'),
 
    'is_production' => env('MIDTRANS_IS_PRODUCTION', false),
    'is_sanitized' => false,
    'is_3ds' => false,
];