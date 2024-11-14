<?php

namespace App\Observers;

use App\Models\V1\Accounting\Account;
use App\Models\V1\Accounting\Wallet;
use App\Models\V1\Merchant;

class MerchantObserver
{
    /**
     * Handle the Merchant "created" event.
     */
    public function created(Merchant $merchant): void
    {
        $account = new Account();
        $account->type = "legal_personality";
        $account->wallet_id = Wallet::query()->where("name", "toman")->first()->id;
        $merchant->accounts()->save($account);
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
