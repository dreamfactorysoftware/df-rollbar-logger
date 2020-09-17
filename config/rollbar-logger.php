<?php


return [

    'channels' => [
        'stack' => [
            'channels' => ['rollbar', 'single'],
        ],

        'rollbar' => [
            'driver' => 'monolog',
            'handler' => \Rollbar\Laravel\MonologHandler::class,
            'access_token' => env('ROLLBAR_TOKEN'),
            'level' => 'debug',
        ],
    ],

];
