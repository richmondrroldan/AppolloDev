<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Third Party Services
    |--------------------------------------------------------------------------
    |
    | This file is for storing the credentials for third party services such
    | as Stripe, Mailgun, Mandrill, and others. This file provides a sane
    | default location for this type of information, allowing packages
    | to have a conventional place to find your various credentials.
    |
    */

    'mailgun' => [
        'domain' => 'sandboxd9d65cae87f4488eb21ab42a22d1414c.mailgun.org',
        'secret' => 'key-1d342e4c1b8a90275288c2647ee0c620',
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

    'google' => [
    'client_id' => '183917881239-7etlr2hgd60qr291as0r7u8mve1qb362.apps.googleusercontent.com',
    'client_secret' => 'TffMKzx5KuqPUxCxRKROl92O',
    'redirect' => 'http://testapp-appollo.herokuapp.com/callback',
    ],

];
