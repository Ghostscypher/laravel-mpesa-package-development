<?php

namespace Hackdelta\LaravelMpesa;

use Illuminate\Support\ServiceProvider;

class LaravelMpesaServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        // Merges the config file for this package
        $this->mergeConfigFrom(
            __DIR__.'/../config/mpesa.php', 'mpesa'
        );

        // Register the mpesa facade
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        // Load the required files
        $this->loadRoutesFrom(__DIR__.'/../routes/web.php');
        $this->loadMigrationsFrom(__DIR__.'/../database/migrations');

        // The config file
        $this->publishes([
            __DIR__.'/../config/mpesa.php' => config_path('mpesa.php'),
        ], 'config');

        // Database migrations for the auth model
        $this->publishes([
            __DIR__.'/../database/migrations/' => database_path('migrations')
        ], 'migrations');

    }
}
