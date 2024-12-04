<?php

namespace App\Services\Finance\src\Traits;

use Finance\Entities\Models\Account;
use Finance\Entities\Models\Wallet;

trait AccountTrait
{
    public function createAccounts($object)
    {
        $wallets_id = Wallet::query()
            ->get("id");
        foreach ($wallets_id as $wallet_id) {
            $account = new Account();
            $account->wallet_id = $wallet_id;
            $object->accounts()->save($account);
        }
    }

    public function createAccount($object, $walletName = "toman")
    {
        $wallet_id = Wallet::query()
            ->where("name", $walletName)
            ->pluck("id")
            ->first();
        if ($wallet_id) {
            $account = new Account();
            $account->wallet_id = $wallet_id;
            $object->accounts()->save($account);
        }
    }

    public function createTemporaryAccount($wallet, $object, $expireDate)
    {
        $account = new Account();
        $account->type = "temporary";
        $account->expiered_at = $expireDate;
        $account->wallet_id = $wallet->id;
        $object->accounts()->save($account);
    }
}
