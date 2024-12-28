<?php

namespace Finance;

use Finance\Traits\AccountTrait;
use Finance\Traits\BalancesTrait;
use Finance\Traits\TransactionTrait;
use Finance\Traits\WalletTrait;

class FinanceService
{
    use WalletTrait, AccountTrait, TransactionTrait, BalancesTrait;
}
