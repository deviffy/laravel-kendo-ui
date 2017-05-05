# laravel-kendo-ui
Laravel Service Provider for Kendo UI

## Installation
Install the package with composer:

    composer require deviffy/laravel-kendo-ui

Add the service provider in `config/app.php`:

    'Kendo\KendoUIServiceProvider',

Publish public files:

    php artisan vendor:publish --tag=public --force
