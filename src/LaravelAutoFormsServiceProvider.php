<?php

namespace MarcAndreAppel\LaravelAutoForms;

use Illuminate\Support\ServiceProvider;

class LaravelAutoFormsServiceProvider extends ServiceProvider
{
    /**
     * Perform post-registration booting of services.
     *
     * @return void
     */
    public function boot(): void
    {
        // $this->loadTranslationsFrom(__DIR__.'/../resources/lang', 'marcandreappel');
        // $this->loadViewsFrom(__DIR__.'/../resources/views', 'marcandreappel');
        // $this->loadMigrationsFrom(__DIR__.'/../database/migrations');
        // $this->loadRoutesFrom(__DIR__.'/routes.php');

        // Publishing is only necessary when using the CLI.
        if ($this->app->runningInConsole()) {
            $this->bootForConsole();
        }
    }

    /**
     * Register any package services.
     *
     * @return void
     */
    public function register(): void
    {
        $this->mergeConfigFrom(__DIR__.'/../config/autoforms.php', 'laravelautoforms');

        // Register the service the package provides.
        $this->app->singleton('laravelautoforms', function ($app) {
            return new LaravelAutoForms;
        });
    }

    /**
     * Get the services provided by the provider.
     *
     * @return array
     */
    public function provides()
    {
        return ['laravelautoforms'];
    }

    /**
     * Console-specific booting.
     *
     * @return void
     */
    protected function bootForConsole(): void
    {
        // Publishing the configuration file.
        $this->publishes([
            __DIR__.'/../config/autoforms.php' => config_path('autoforms.php'),
        ], 'laravelautoforms.config');

        // Publishing the views.
        /*$this->publishes([
            __DIR__.'/../resources/views' => base_path('resources/views/vendor/marcandreappel'),
        ], 'laravelautoforms.views');*/

        // Publishing assets.
        /*$this->publishes([
            __DIR__.'/../resources/assets' => public_path('vendor/marcandreappel'),
        ], 'laravelautoforms.views');*/

        // Publishing the translation files.
        /*$this->publishes([
            __DIR__.'/../resources/lang' => resource_path('lang/vendor/marcandreappel'),
        ], 'laravelautoforms.views');*/

        // Registering package commands.
        // $this->commands([]);
    }
}
