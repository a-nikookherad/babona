<?php

namespace App\Observers;


use App\Models\V1\Accounting\Account;
use App\Models\V1\Accounting\Wallet;
use App\Models\V1\Campaign;

class CampaignObserver
{
    /**
     * Handle the Campaign "created" event.
     */
    public function created(Campaign $campaign): void
    {
        $account = new Account();
        $account->type = "legal_personality";
        $account->wallet_id = Wallet::query()->where("name", "toman")->first()->id;
        $campaign->accounts()->save($account);
    }

    /**
     * Handle the Campaign "updated" event.
     */
    public function updated(Campaign $campaign): void
    {
        //
    }

    /**
     * Handle the Campaign "deleted" event.
     */
    public function deleted(Campaign $campaign): void
    {
        //
    }

    /**
     * Handle the Campaign "restored" event.
     */
    public function restored(Campaign $campaign): void
    {
        //
    }

    /**
     * Handle the Campaign "force deleted" event.
     */
    public function forceDeleted(Campaign $campaign): void
    {
        //
    }
}
