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
            'category' => 'App\Models\Category',
            'product' => 'App\Models\Product',
            'merchant' => 'App\Models\Merchant',
            'user' => 'App\Models\User',
            'bank' => 'App\Models\Bank',
            'campaign' => 'App\Models\Campaign',
        ]);
    }
}
