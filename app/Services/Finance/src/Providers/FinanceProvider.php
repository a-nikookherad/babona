<?php

namespace Finance\Providers;

use Illuminate\Database\Eloquent\Relations\Relation;
use Illuminate\Support\ServiceProvider;

class FinanceProvider extends ServiceProvider
{
    public function register()
    {

    }

    public function boot()
    {
        $this->loadMigrationsFrom(__DIR__ . "/../Database/Migrations");
        Relation::enforceMorphMap([
//            'wallet' => 'Finance\Entities\Models\Wallet',
        ]);
    }
}

