<?php

namespace App\Providers;

use App\Models\Bank;
use App\Models\Campaign;
use App\Models\Merchant;
use App\Models\User;
use App\Observers\BankObserver;
use App\Observers\CampaignObserver;
use App\Observers\MerchantObserver;
use App\Observers\UserObserver;
use App\Services\Finance\src\Entities\Models\Account;
use App\Services\Finance\src\Entities\Observers\AccountObserver;
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
        Bank::observe(BankObserver::class);
        Campaign::observe(CampaignObserver::class);
        Merchant::observe(MerchantObserver::class);
    }
}
