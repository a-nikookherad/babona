<?php

namespace App\Services\Finance\src\Traits;

use Finance\Entities\Models\Wallet;

trait WalletTrait
{

    public function createWallet(string $walletName, array $objects)
    {

    }

    public function wallets()
    {
        return Wallet::query()
            ->get();
    }
}
