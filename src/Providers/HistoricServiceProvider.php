<?php

namespace ConfrariaWeb\Historic\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Blade;

class HistoricServiceProvider extends ServiceProvider
{

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        $this->loadViewsFrom(__DIR__ . '/../Views', 'historic');
        $this->loadMigrationsFrom(__DIR__ . '/../Databases');
        $this->publishes([__DIR__ . '/../../config/cw_historic.php' => config_path('cw_historic.php')], 'config');

        Blade::component('historic::components.list', 'historic');
    }

    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {

    }
}
