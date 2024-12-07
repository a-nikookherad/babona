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
            'category' => 'App\Services\Production\src\Entities\Models\Category',
            'product' => 'App\Services\Production\src\Entities\Models\Product',
            'merchant' => 'App\Models\Merchant',
            'user' => 'App\Models\User',
            'bank' => 'App\Services\Finance\src\Entities\Models\Bank',
            'campaign' => 'App\Services\Loyalty\src\Entities\Models\Campaign',
            'order' => 'App\Services\Ordering\src\Entities\Models\Order',
            'payment' => 'App\Services\Ordering\src\Entities\Models\Payment',
        ]);
    }
}
