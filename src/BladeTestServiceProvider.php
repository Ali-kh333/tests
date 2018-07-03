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

        Blade::directive('hi', function () {
            return "<?php echo 'hey'; ?>";
        });
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
