<?php

namespace App\Observers;

use App\Models\Bank;
use Finance\Finance;

class BankObserver
{
    /**
     * Handle the Bank "created" event.
     */
    public function created(Bank $bank): void
    {
        Finance::createAccount($bank);
    }

    /**
     * Handle the Bank "updated" event.
     */
    public function updated(Bank $bank): void
    {
        //
    }

    /**
     * Handle the Bank "deleted" event.
     */
    public function deleted(Bank $bank): void
    {
        //
    }

    /**
     * Handle the Bank "restored" event.
     */
    public function restored(Bank $bank): void
    {
        //
    }

    /**
     * Handle the Bank "force deleted" event.
     */
    public function forceDeleted(Bank $bank): void
    {
        //
    }
}
