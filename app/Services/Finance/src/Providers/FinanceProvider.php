<?php

namespace Finance\Providers;

use Finance\Entities\Models\Account;
use Finance\Entities\Models\Balance;
use Finance\Entities\Models\Wallet;
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
            'wallet' => Wallet::class,
            'account' => Account::class,
            'balance' => Balance::class,
        ]);
    }
}

