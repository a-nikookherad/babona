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
        $this->mergeConfigFrom(__DIR__ . "/../Config/settings.php", "production");
        $this->loadMigrationsFrom(__DIR__ . "/../Database/Migrations");
        $this->loadRoutesFrom(__DIR__ . "/../Routes/web.php");
//        $this->loadViewsFrom(__DIR__ . "/../Views", "Production");

        Gate::policy(Product::class, ProductPolicy::class);
    }
}

