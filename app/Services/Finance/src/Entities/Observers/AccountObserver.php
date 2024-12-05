<?php

namespace Finance\Entities\Observers;


use App\Services\Finance\src\Adapter\JalaliCalendar;
use Finance\Entities\Models\Account;
use Finance\Entities\Models\Balance;

class AccountObserver
{
    /**
     * Handle the Account "created" event.
     */
    public function created(Account $account): void
    {

        if ($account->wallet->is_permanent == 1) {
            $balance = new Balance();
            $balance->credit = 0;
            $balance->started_at = null;
            $balance->expired_at = null;
            $account->balance()->save($balance);
        } else {
            $balance = new Balance();
            $balance->credit = 0;
            $balance->started_at = JalaliCalendar::startOfYear();
            $balance->expired_at = JalaliCalendar::endOfYear();
            $account->balance()->save($balance);
        }


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
