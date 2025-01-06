<?php

namespace Shipping\Providers;

use Illuminate\Support\ServiceProvider;
use Shipping\Contracts\ShippingServiceInterface;
use Shipping\ShippingService;

class ShippingServiceProvider extends ServiceProvider
{
    public function register()
    {

    }

    public function boot()
    {
//        $this->mergeConfigFrom(__DIR__ . "/../Config/attachment.php", "attachment");
        /*$this->publishes([
            __DIR__ . "/../Config/attachment.php" => config_path("attachment.php")
        ], "attachment_config");*/

        $this->loadMigrationsFrom(__DIR__ . "/../Database/Migrations");

//        File::observe(AttachmentObserver::class);

        $this->app->bind(ShippingServiceInterface::class, ShippingService::class);
    }
}

