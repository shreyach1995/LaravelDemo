<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Service\DemoFacadeService;

class DemoFacadeServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind('demo', function(){
            return new DemoFacadeService();
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
