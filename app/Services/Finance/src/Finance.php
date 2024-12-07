<?php

namespace Finance;

use Illuminate\Support\Facades\Facade;

/**
 * @method static FinanceService credit($object)
 * @method static FinanceService transfer($fromObject, $toObject, $wallet, $amount)
 * @method static FinanceService transaction($transaction_uuid)
 * @method static FinanceService enquiry($object, $wallet, $fromDateTime, $toDateTime)
 * @method static FinanceService createWallet(array $walletInfo, array $objects)
 * @method static FinanceService wallets()
 * @method static FinanceService createAccounts($object)
 * @method static FinanceService createAccount($object, $walletName = "toman")
 * @method static FinanceService createTemporaryAccount($wallet, $object, $expireDate)
 * @method static FinanceService resetBalances($walletName)
 */
class Finance extends Facade
{
    public static function getFacadeAccessor()
    {
        return FinanceService::class;
    }
}
