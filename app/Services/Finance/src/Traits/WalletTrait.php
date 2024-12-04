<?php

namespace App\Services\Finance\src\Traits;

use Finance\Entities\Models\Wallet;

trait WalletTrait
{

    public function createWallet(array $walletInfo, array $objects)
    {
        //todo check which objects(user,merchant,...) need account
        return Wallet::query()
            ->create($walletInfo);
    }

    public function wallets()
    {
        return Wallet::query()
            ->get();
    }
}
