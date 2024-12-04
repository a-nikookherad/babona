<?php

namespace Finance\Entities\Observers;


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
            $account->balances()->save($balance);
        } else {
            $started_at = jdate(now())->getFirstDayOfYear()->format("Y-m-d H:i:s");
            $expired_at = jdate(now())->getEndDayOfYear()->format("Y-m-d H:i:s");
            $balance = new Balance();
            $balance->credit = 0;
            $balance->started_at = $started_at;
            $balance->expired_at = $expired_at;
            $account->balances()->save($balance);
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
