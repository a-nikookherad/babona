<?php

namespace App\Observers;

use App\Models\V1\Accounting\Account;
use App\Models\V1\Accounting\Wallet;
use App\Models\V1\Bank;

class BankObserver
{
    /**
     * Handle the Bank "created" event.
     */
    public function created(Bank $bank): void
    {
        $account = new Account();
        $account->type = "legal_personality";
        $account->wallet_id = Wallet::query()->where("name", "toman")->first()->id;
        $bank->account()->save($account);
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
