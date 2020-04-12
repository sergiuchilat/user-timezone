<?php

namespace LaravelMerax\UserTimeZone;

use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        $this->loadMigrationsFrom(__DIR__.'/database/migrations');
        $this->mergeConfigFrom(__DIR__ . '/config/user-timezone.php', 'user-timezone');
        $this->mergeConfigFrom(__DIR__ . '/config/timezones.php', 'timezones');
        $this->mergeConfigFrom(__DIR__ . '/config/timezones-by-continent.php', 'timezones-by-continent');
    }
}
