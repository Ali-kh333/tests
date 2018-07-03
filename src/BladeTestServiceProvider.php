<?php

namespace Khalili\Blade;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Blade;

class BladeTestServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        $this->loadViewsFrom(__DIR__ . '/views', 'btest');

        Blade::component('hi', 'hi');
    }

    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
