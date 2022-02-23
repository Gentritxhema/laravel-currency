<?php

namespace GentritXhema\Currencies\Providers;

use Illuminate\Support\ServiceProvider;

class CurrenciesProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        $this->loadMigrationsFrom(__DIR__.'/Database/Migrations');

        $this->publishes([
            __DIR__.'/../Database/Migrations/' => database_path('migrations')
        ], 'migrations');
        
        $this->publishes([
            __DIR__.'/../Database/Seeds/' => database_path('seeders'),
        ]);
    }
}
