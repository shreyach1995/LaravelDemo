<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class CustomServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind('App\Service\CustomServiceInterface', 'App\Service\CustomService');
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        echo "Executed from Custom service provider".'<br/>';
    }
}
