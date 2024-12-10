<?php

namespace Production\Providers;

use Illuminate\Support\ServiceProvider;

class ProductionProvider extends ServiceProvider
{
    public function register()
    {

    }

    public function boot()
    {
        $this->loadMigrationsFrom(__DIR__ . "/../Database/Migrations");
        $this->loadRoutesFrom(__DIR__ . "/../Routes/web.php");
        $this->loadViewsFrom(__DIR__ . "/../Views","Production");
    }
}

