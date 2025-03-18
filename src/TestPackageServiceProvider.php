<?php

namespace Kunal\TestPackage;

use Illuminate\Support\ServiceProvider;

class TestPackageServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any package services.
     *
     * @return void
     */
    public function boot()
    {
        // Load the package routes
        $this->loadRoutesFrom(__DIR__ . '/../routes/web.php');

        // Load the package views
        $this->loadViewsFrom(__DIR__ . '/../resources/views', 'testpackage');
    }

    /**
     * Register any package services.
     *
     * @return void
     */
    public function register()
    {
        // Register package services if any
    }
}
