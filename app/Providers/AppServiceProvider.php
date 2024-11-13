<?php

namespace App\Providers;

use Illuminate\Database\Eloquent\Relations\Relation;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        Relation::enforceMorphMap([
            'category' => 'App\Models\V1\Category',
            'product' => 'App\Models\V1\Product',
            'merchant' => 'App\Models\V1\Merchant',
            'wallet' => 'App\Models\V1\Accounting\Wallet',
            'user' => 'App\Models\User',
            'bank' => 'App\Models\V1\Bank',
            'campaign' => 'App\Models\V1\Campaign',
        ]);
    }
}
