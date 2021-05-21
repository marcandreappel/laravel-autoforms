<?php
declare(strict_types=1);

namespace MarcAndreAppel\LaravelAutoForms;

use Illuminate\Support\ServiceProvider;
use Livewire\Livewire;
use MarcAndreAppel\LaravelAutoForms\Http\Livewire\AutoForm\Fields;
use MarcAndreAppel\LaravelAutoForms\Http\Livewire\AutoForm\Forms;
use MarcAndreAppel\LaravelAutoForms\Http\Livewire\AutoForm\Types\Checkbox;
use MarcAndreAppel\LaravelAutoForms\Http\Livewire\AutoForm\Types\Email;
use MarcAndreAppel\LaravelAutoForms\Http\Livewire\AutoForm\Types\Radio;
use MarcAndreAppel\LaravelAutoForms\Http\Livewire\AutoForm\Types\Select;
use MarcAndreAppel\LaravelAutoForms\Http\Livewire\AutoForm\Types\Text;
use MarcAndreAppel\LaravelAutoForms\Http\Livewire\AutoForm\Types\Textarea;

class LaravelAutoFormsServiceProvider extends ServiceProvider
{
    public function boot(): void
    {
        $this->loadTranslationsFrom(__DIR__.'/../resources/lang', 'laravel-autoforms');
        $this->loadViewsFrom(__DIR__.'/../resources/views', 'laravel-autoforms');

        Livewire::component('laravel-autoforms::fields', Fields::class);
        Livewire::component('laravel-autoforms::forms', Forms::class);
        Livewire::component('laravel-autoforms::types.checkbox', Checkbox::class);
        Livewire::component('laravel-autoforms::types.email', Email::class);
        Livewire::component('laravel-autoforms::types.radio', Radio::class);
        Livewire::component('laravel-autoforms::types.select', Select::class);
        Livewire::component('laravel-autoforms::types.text', Text::class);
        Livewire::component('laravel-autoforms::types.textarea', Textarea::class);

        if ($this->app->runningInConsole()) {
            $this->bootForConsole();
        }
    }

    public function register(): void
    {
        $this->mergeConfigFrom(__DIR__.'/../config/autoforms.php', 'laravelautoforms');

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
        ], 'autoforms-config');

        // Publishing the views.
        $this->publishes([
            __DIR__.'/../resources/views' => base_path('resources/views/vendor/laravel-autoforms'),
        ], 'autoforms-views');

        // Publishing assets.
        /*$this->publishes([
            __DIR__.'/../resources/assets' => public_path('vendor/marcandreappel'),
        ], 'laravelautoforms.views');*/

        // Publishing the translation files.
        $this->publishes([
            __DIR__.'/../resources/lang' => resource_path('lang/vendor/laravel-autoforms'),
        ], 'autoforms-lang');

        // Publishing the migrations.
        $this->publishes([
            __DIR__.'/../database/migrations/2021_05_19_133700_create_autoform_forms_table.php.stub'  => database_path('migrations/' . '2021_05_19_133700_create_autoform_forms_table.php'),
            __DIR__.'/../database/migrations/2021_05_19_133710_create_autoform_fields_table.php.stub' => database_path('migrations/' . '2021_05_19_133710_create_autoform_fields_table.php'),
            __DIR__.'/../database/migrations/2021_05_19_133720_create_autoform_labels_table.php.stub' => database_path('migrations/' . '2021_05_19_133720_create_autoform_labels_table.php'),
        ], 'autoforms-migrations');
        // Registering package commands.
        // $this->commands([]);
    }
}
