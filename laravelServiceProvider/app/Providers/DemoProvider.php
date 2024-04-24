<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Demo\DemoFile;
class DemoProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
       $this->app->bind('demoFacade', function(){
            return new DemoFile();
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
