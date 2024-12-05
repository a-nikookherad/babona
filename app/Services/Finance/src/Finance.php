<?php

namespace Finance;

use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Facade;

/**
 * @method static OrderingService credit($object)
 * @method static OrderingService transfer($fromObject, $toObject, $wallet, $amount)
 * @method static OrderingService transaction($transaction_uuid)
 * @method static OrderingService enquiry($object, $wallet, $fromDateTime, $toDateTime)
 * @method static OrderingService createWallet(array $walletInfo, array $objects)
 * @method static OrderingService wallets()
 * @method static OrderingService createAccounts($object)
 * @method static OrderingService createAccount($object, $walletName = "toman")
 * @method static OrderingService createTemporaryAccount($wallet, $object, $expireDate)
 * @method static OrderingService resetBalances($walletName)
 */
class Finance extends Facade
{
    public static function getFacadeAccessor()
    {
        return OrderingService::class;
    }
}
