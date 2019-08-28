<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Third Party Services
    |--------------------------------------------------------------------------
    |
    | This file is for storing the credentials for third party services such
    | as Stripe, Mailgun, SparkPost and others. This file provides a sane
    | default location for this type of information, allowing packages
    | to have a conventional place to find your various credentials.
    |
    */

    'mailgun' => [
        'domain' => env('MAILGUN_DOMAIN'),
        'secret' => env('MAILGUN_SECRET'),
    ],

    'ses' => [
        'key' => env('SES_KEY'),
        'secret' => env('SES_SECRET'),
        'region' => 'us-east-1',
    ],

    'sparkpost' => [
        'secret' => env('SPARKPOST_SECRET'),
    ],

    'stripe' => [
        'model' => App\User::class,
        'key' => env('STRIPE_KEY'),
        'secret' => env('STRIPE_SECRET'),
    ],

    'ga' => [
        'uaid' => env('GA_UA_ID'),
        'optimize_id' => env('GA_OPTIMIZE_ID'),

        'experiments' => [ // This only supports A/B/n tests
            // 'start' => [ // array key is the route name
            //     'view' => 'welcome', // If variant==0 then it's just the originial otherwise "-$variant" is appended.
            //     'id' => env('GA_EXPERIMENT_ID'),
            //     'variants' => [0, 1]
            // ],
        ],
    ],

];
