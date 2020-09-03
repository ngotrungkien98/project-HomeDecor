<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Third Party Services
    |--------------------------------------------------------------------------
    |
    | This file is for storing the credentials for third party services such
    | as Mailgun, Postmark, AWS and more. This file provides the de facto
    | location for this type of information, allowing packages to have
    | a conventional file to locate the various service credentials.
    |
    */

    'mailgun' => [
        'domain' => env('MAILGUN_DOMAIN'),
        'secret' => env('MAILGUN_SECRET'),
        'endpoint' => env('MAILGUN_ENDPOINT', 'api.mailgun.net'),
    ],

    'postmark' => [
        'token' => env('POSTMARK_TOKEN'),
    ],

    'ses' => [
        'key' => env('AWS_ACCESS_KEY_ID'),
        'secret' => env('AWS_SECRET_ACCESS_KEY'),
        'region' => env('AWS_DEFAULT_REGION', 'us-east-1'),
    ],

    'stripe' => [
        'secret' => 'sk_test_51HHTL2BIE8mv7GTzAzgKMu7hq6VI0c0ZSaDcP5ZvlN9d7Yhpx48srlQGXpsoxfj7NHfFjopd7GnC5ophaijjaJTf0043PbHI3c',
    ],

    'google' => [
        'client_id'     => '69489671395-070m9rkqgc5or624tmqgh1ptfrrvkcm1.apps.googleusercontent.com',
        'client_secret' => '4KWNW_9egJLaJtf8l6fwGGkw',
        'redirect'      => 'http://localhost:8000/login/google/callback'
    ],
    'facebook' => [
        'client_id'     => '328473508273292',
        'client_secret' => 'bf94b2c202f7eab6c66cfa44a77fa85f',
        'redirect'      => 'http://localhost:8000/login/facebook/callback'
    ],
];
