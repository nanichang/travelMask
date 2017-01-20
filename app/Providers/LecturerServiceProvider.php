<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class LecturerServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind('App\Repositories\Lecturer\LecturerContract',
            'App\Repositories\Lecturer\EloquentLecturerRepository');
    }
}
