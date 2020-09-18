<?php

namespace DreamFactory\Core\RollbarLogger;

use Illuminate\Support\Facades\Config;
use Rollbar\Laravel\MonologHandler;

class ServiceProvider extends \Illuminate\Support\ServiceProvider
{
    public function boot()
    {
    }

    public function register()
    {
        if (env('ROLLBAR_TOKEN') == null) {
            return;
        }

        $logging = Config::get('logging');
        $logging['channels']['stack']['channels'][] = 'rollbar';
        $logging['channels']['rollbar'] = [
            'driver' => 'monolog',
            'handler' => MonologHandler::class,
            'access_token' => env('ROLLBAR_TOKEN'),
            'level' => 'error',
        ];

        config(['logging' => $logging]);
    }

}
