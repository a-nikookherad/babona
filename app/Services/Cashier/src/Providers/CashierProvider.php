<?php

namespace Cashier\Providers;

use Cashier\Entities\Models\Bank;
use Cashier\Entities\Models\Order;
use Cashier\Entities\Observers\BankObserver;
use Illuminate\Database\Eloquent\Relations\Relation;
use Illuminate\Support\ServiceProvider;
use Production\Entities\Models\ProductDetail;

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

        ProductDetail::resolveRelationUsing("orders", function ($productDetail) {
            return $productDetail->belongsToMany(Order::class, "order_prices", "price_id", "order_id");
        });

        Bank::observe(BankObserver::class);
    }
}

