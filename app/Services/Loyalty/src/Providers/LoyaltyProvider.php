<?php

namespace Loyalty\Providers;

use Illuminate\Database\Eloquent\Relations\Relation;
use Illuminate\Support\ServiceProvider;
use Loyalty\Entities\Models\Campaign;
use Loyalty\Entities\Observers\CampaignObserver;
use Production\Entities\Models\Product;

class LoyaltyProvider extends ServiceProvider
{
    public function register()
    {

    }

    public function boot()
    {
        Product::resolveRelationUsing("campaigns", function ($product) {
            return $product->belongsToMany(Campaign::class, "campaign_prices", "price_id", "order_id");
        });

        $this->loadMigrationsFrom(__DIR__ . "/../Database/Migrations");
        Relation::enforceMorphMap([
//            'wallet' => 'Loyalty\Entities\Models\Wallet',
        ]);

        Campaign::observe(CampaignObserver::class);
    }
}

