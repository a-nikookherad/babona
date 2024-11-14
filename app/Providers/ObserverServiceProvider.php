<?php

namespace App\Providers;

use App\Models\User;
use App\Models\V1\Accounting\Account;
use App\Models\V1\Bank;
use App\Models\V1\Campaign;
use App\Models\V1\Merchant;
use App\Observers\AccountObserver;
use App\Observers\BankObserver;
use App\Observers\CampaignObserver;
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
        Account::observe(AccountObserver::class);
        Bank::observe(BankObserver::class);
        Campaign::observe(CampaignObserver::class);
        Merchant::observe(MerchantObserver::class);
    }
}
