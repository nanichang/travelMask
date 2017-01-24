<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Sentinel;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        view()->share( 'loggedUser', Sentinel::getUser() );
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
