<?php

namespace Package\Providers;

use Illuminate\Support\Facades\Gate;
use Illuminate\Support\ServiceProvider;
use Package\Entities\Models\Package;
use Package\Entities\Policies\PackagePolicy;

class PackageServiceProvider extends ServiceProvider
{
    public function register()
    {

    }

    public function boot()
    {
        $this->mergeConfigFrom(__DIR__ . "/../Config/package.php", "package");
        $this->loadMigrationsFrom(__DIR__ . "/../Database/Migrations");
        $this->loadRoutesFrom(__DIR__ . "/../Routes/web.php");
        $this->loadViewsFrom(__DIR__ . "/../Views", "Package");
        $this->publishes([
            __DIR__ . "/../Config/package.php" => config_path("package.php")
        ], "package");

        Gate::policy(Package::class, PackagePolicy::class);
    }
}

