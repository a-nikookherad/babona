<?php

namespace App\Services\Finance\src\Traits;

use App\Services\Finance\src\Adapter\JalaliCalendar;
use Finance\Entities\Models\Balance;
use Finance\Entities\Models\Wallet;

trait BalancesTrait
{
    public function resetBalances($walletName)
    {
        $wallet = Wallet::query()
            ->where("name", $walletName)
            ->where("is_permanent", false)
            ->with("allAccounts")
            ->first();
        foreach ($wallet->allAccounts as $account) {
            $balance = new Balance();
            $balance->credit = 0;
            $balance->started_at = JalaliCalendar::startOfYear();
            $balance->expired_at = JalaliCalendar::endOfYear();
            $balance->account_id = $account->id;
            $account->balances()->save($balance);
        }
    }
}
