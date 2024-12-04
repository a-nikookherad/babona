<?php

namespace Finance;


use App\Services\Finance\src\Traits\AccountTrait;
use App\Services\Finance\src\Traits\WalletTrait;

class FinanceService
{
    use WalletTrait, AccountTrait;

    public function credit($object)
    {

    }

    public function transfer($fromObject, $toObject, $wallet, $amount)
    {

    }

    public function transaction($transaction_uuid)
    {

    }

    public function enquiry($object,$fromDateTime,$toDateTime)
    {

    }

}
