<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Default Mailer
    |--------------------------------------------------------------------------
    |
    | This option controls the default mailer that is used to send all email
    | messages unless another mailer is explicitly specified when sending
    | the message. All additional mailers can be configured within the
    | "mailers" array. Examples of each type of mailer are provided.
    |
    */

    'default' => env('MAIL_MAILER', 'log'),

    /*
    |--------------------------------------------------------------------------
    | Mailer Configurations
    |--------------------------------------------------------------------------
    |
    | Here you may configure all of the mailers used by your application.
    */

    'mailers' => [

        'smtp' => [
            'transport' => 'smtp',
            'scheme' => env('MAIL_SCHEME'),
            'url' => env('MAIL_URL'),
            'host' => env('MAIL_HOST', '127.0.0.1'),
            'port' => env('MAIL_PORT', 2525),
            'auto_tls' => env('MAIL_AUTO_TLS', true),
            'username' => env('MAIL_USERNAME'),
            'password' => env('MAIL_PASSWORD'),
            'timeout' => null,
            'local_domain' => env('MAIL_EHLO_DOMAIN', parse_url((string) env('APP_URL', 'http://localhost'), PHP_URL_HOST)),
        ],

        'ses' => ['transport' => 'ses'],
        'postmark' => ['transport' => 'postmark'],
        'resend' => ['transport' => 'resend'],
        'sendmail' => [
            'transport' => 'sendmail',
            'path' => env('MAIL_SENDMAIL_PATH', '/usr/sbin/sendmail -bs -i'),
        ],
        'log' => [
            'transport' => 'log',
            'channel' => env('MAIL_LOG_CHANNEL'),
        ],
        'array' => ['transport' => 'array'],
        'failover' => [
            'transport' => 'failover',
            'mailers' => ['smtp', 'log'],
            'retry_after' => 60,
        ],
        'roundrobin' => [
            'transport' => 'roundrobin',
            'mailers' => ['ses', 'postmark'],
            'retry_after' => 60,
        ],
    ],

    'from' => [
        'address' => env('MAIL_FROM_ADDRESS', 'hello@example.com'),
        'name' => env('MAIL_FROM_NAME', 'Example'),
    ],

    'lead_to_addresses' => array_values(array_filter(array_map(
        static fn (string $address): string => trim($address),
        explode(',', (string) env('LEAD_TO_EMAILS', env('LEAD_TO_EMAIL', env('MAIL_FROM_ADDRESS'))))
    ))),
];
