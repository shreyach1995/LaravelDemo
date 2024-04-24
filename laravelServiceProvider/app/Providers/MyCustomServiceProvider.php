<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class MyCustomServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind('App\Service\MyCustomServiceInterface', 'App\Service\MyCustomService');
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        echo "This is the boot function for My Custom Service Provider"."<br/>";
    }
}
