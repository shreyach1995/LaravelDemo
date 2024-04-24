<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Service\TestService;

class TestProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind('testFacade', function(){
            return new TestService();
        });
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
