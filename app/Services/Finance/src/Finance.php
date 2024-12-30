<?php

namespace Finance;

use Illuminate\Support\Facades\Facade;

/**
 * @method static FinanceService createWallet(array $walletInfo, array $classes = [])
 * @method static FinanceService wallets()
 *
 * @method static FinanceService createAccount($object, $type = "customer", $wallet = "default", $canBeMinus = false)
 * @method static FinanceService createAccounts($object, $type = "customer")
 * @method static FinanceService account($object, $wallet = "default")
 * @method static FinanceService credit($account)
 *
 * @method static FinanceService transfer($fromAccount, $toAccount, $amount, $description = null)
 * @method static FinanceService reverseTransfer($transaction, $amount = null, $description = null)
 * @method static FinanceService transaction($transaction_uuid)
 * @method static FinanceService acceptTransaction($transaction)
 */
// @method static FinanceService enquiry($account, $wallet, $fromDateTime, $toDateTime)
// @method static FinanceService resetBalances($walletName)
class Finance extends Facade
{
    public static function getFacadeAccessor()
    {
        return FinanceService::class;
    }
}
