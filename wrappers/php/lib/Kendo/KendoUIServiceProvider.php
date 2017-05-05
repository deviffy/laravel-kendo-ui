<?php

namespace Kendo;

use Illuminate\Support\ServiceProvider;

class KendoUIServiceProvider extends ServiceProvider {

    /**
     * Kendo assets.
     *
     * @return void
     */
    public function boot()
    {
        $this->publishes([
            __DIR__.'/../../content/' => public_path('vendor/deviffy'),
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

}
