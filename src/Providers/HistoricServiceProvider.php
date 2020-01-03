<?php

namespace ConfrariaWeb\Historic\Providers;

use ConfrariaWeb\Historic\Commands\MakeHistoric;
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
        if ($this->app->runningInConsole()) {
            $this->commands([
                MakeHistoric::class
            ]);
        }

        $this->loadViewsFrom(__DIR__ . '/../Views', 'historic');
        $this->loadMigrationsFrom(__DIR__ . '/../Databases');
        $this->publishes([__DIR__ . '/../../config/cw_historic.php' => config_path('cw_historic.php')], 'cw_historic');

        Blade::component('historic::components.list', 'historic');
        Blade::component('historic::components.historics', 'historics');
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
