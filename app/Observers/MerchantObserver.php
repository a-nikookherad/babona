<?php

namespace App\Observers;

use App\Models\Merchant;
use Finance\Finance;

class MerchantObserver
{
    /**
     * Handle the Merchant "created" event.
     */
    public function created(Merchant $merchant): void
    {
        Finance::createAccounts($merchant,"merchant");
    }

    /**
     * Handle the Merchant "updated" event.
     */
    public function updated(Merchant $merchant): void
    {
        //
    }

    /**
     * Handle the Merchant "deleted" event.
     */
    public function deleted(Merchant $merchant): void
    {
        //
    }

    /**
     * Handle the Merchant "restored" event.
     */
    public function restored(Merchant $merchant): void
    {
        //
    }

    /**
     * Handle the Merchant "force deleted" event.
     */
    public function forceDeleted(Merchant $merchant): void
    {
        //
    }
}
