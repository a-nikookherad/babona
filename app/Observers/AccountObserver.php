<?php

namespace App\Observers;

use App\Models\V1\Accounting\Account;
use App\Models\V1\Accounting\Balance;

class AccountObserver
{
    /**
     * Handle the Account "created" event.
     */
    public function created(Account $account): void
    {
        $balance = new Balance();
        $balance->credit = 0;
        $balance->started_at = null;
        $balance->expired_at = null;
    }

    /**
     * Handle the Account "updated" event.
     */
    public function updated(Account $account): void
    {
        //
    }

    /**
     * Handle the Account "deleted" event.
     */
    public function deleted(Account $account): void
    {
        //
    }

    /**
     * Handle the Account "restored" event.
     */
    public function restored(Account $account): void
    {
        //
    }

    /**
     * Handle the Account "force deleted" event.
     */
    public function forceDeleted(Account $account): void
    {
        //
    }
}
