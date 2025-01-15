<?php

namespace Production\Providers;

use Illuminate\Support\Facades\Gate;
use Illuminate\Support\ServiceProvider;
use Production\Entities\Models\Product;
use Production\Entities\Policies\ProductPolicy;

class ProductionProvider extends ServiceProvider
{
    public function register()
    {

    }

    public function boot()
    {
        $this->mergeConfigFrom(__DIR__ . "/../Config/production.php", "production");
        $this->loadMigrationsFrom(__DIR__ . "/../Database/Migrations");
        $this->publishes([
            __DIR__ . "/../Config/production.php" => config_path("production.php")
        ], "production");

        Gate::policy(Product::class, ProductPolicy::class);
    }
}

