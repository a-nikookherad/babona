<?php

namespace Finance\Providers;

use Finance\Entities\Models\Account;
use Finance\Entities\Models\Wallet;
use Finance\Entities\Observers\AccountObserver;
use Finance\Entities\Observers\WalletObserver;
use Illuminate\Foundation\Support\Providers\EventServiceProvider as ServiceProvider;

class FinanceEventProvider extends ServiceProvider
{
    /**
     * Register any events for your application.
     *
     * @return void
     */
    public function boot()
    {
        //submit observer
        Account::observe(AccountObserver::class);
        Wallet::observe(WalletObserver::class);
    }

    /**
     * Determine if events and listeners should be automatically discovered.
     *
     * @return bool
     */
    public function shouldDiscoverEvents()
    {
        return false;
    }
}
