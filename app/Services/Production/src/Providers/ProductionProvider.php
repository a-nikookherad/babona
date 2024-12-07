<?php

namespace Production\Providers;

use Illuminate\Database\Eloquent\Relations\Relation;
use Illuminate\Support\ServiceProvider;

class ProductionProvider extends ServiceProvider
{
    public function register()
    {

    }

    public function boot()
    {
        $this->loadMigrationsFrom(__DIR__ . "/../Database/Migrations");
        Relation::enforceMorphMap([
//            'wallet' => 'Production\Entities\Models\Wallet',
        ]);
    }
}

