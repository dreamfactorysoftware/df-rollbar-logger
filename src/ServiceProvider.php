<?php

namespace DreamFactory\Core\RollbarLogger;

class ServiceProvider extends \Illuminate\Support\ServiceProvider
{
    public function boot()
    {
    }

    public function register()
    {
        if (env('ROLLBAR_TOKEN') != null) {
            return;
        }
        $this->mergeConfigFrom(__DIR__ . '/../config/rollbar-logger.php', 'logging');
    }

}
