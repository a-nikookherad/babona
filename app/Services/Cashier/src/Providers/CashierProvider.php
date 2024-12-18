<?php

namespace Cashier\Providers;

use Cashier\Entities\Models\Bank;
use Cashier\Entities\Observers\BankObserver;
use Illuminate\Database\Eloquent\Relations\Relation;
use Illuminate\Support\ServiceProvider;

class CashierProvider extends ServiceProvider
{
    public function register()
    {

    }

    public function boot()
    {
        $this->loadMigrationsFrom(__DIR__ . "/../Database/Migrations");
        Relation::enforceMorphMap([
//            'wallet' => 'Cashier\Entities\Models\Wallet',
        ]);

        Bank::observe(BankObserver::class);
    }
}

