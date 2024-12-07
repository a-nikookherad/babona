<?php

namespace Loyalty\Providers;

use Illuminate\Database\Eloquent\Relations\Relation;
use Illuminate\Support\ServiceProvider;
use Loyalty\Entities\Models\Campaign;
use Loyalty\Entities\Observers\CampaignObserver;

class LoyaltyProvider extends ServiceProvider
{
    public function register()
    {

    }

    public function boot()
    {
        $this->loadMigrationsFrom(__DIR__ . "/../Database/Migrations");
        Relation::enforceMorphMap([
//            'wallet' => 'Loyalty\Entities\Models\Wallet',
        ]);

        Campaign::observe(CampaignObserver::class);
    }
}

