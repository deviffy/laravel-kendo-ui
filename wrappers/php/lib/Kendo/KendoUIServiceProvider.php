<?php

namespace Kendo;

use Illuminate\Support\ServiceProvider;

class KendoUIServiceProvider extends ServiceProvider {

    /**
     * Bootstrap the application events.
     *
     * @return void
     */
    public function boot()
    {
        $this->publishes([
            __DIR__.'/../../content/' => public_path('vendor/kendo'),
        ], 'public');
    }

    /**
     * Register the service provider.
     *
     * @return void
     */
    public function register()
    {
        $this->app->singleton('laravel-kendo-ui', function ($app) {
            return new DataSourceManager($app);
        });
    }

    /**
     * Get the services provided by the provider.
     *
     * @return array
     */
    public function provides()
    {
        return ['laravel-kendo-ui'];
    }

}
