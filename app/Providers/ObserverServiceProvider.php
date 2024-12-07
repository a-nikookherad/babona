<?php

namespace App\Providers;

use App\Models\Merchant;
use App\Models\User;
use App\Observers\MerchantObserver;
use App\Observers\UserObserver;
use Illuminate\Support\ServiceProvider;

class ObserverServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        User::observe(UserObserver::class);
        Merchant::observe(MerchantObserver::class);
    }
}
