<?php

namespace Finance\Entities\Repositories;

use Illuminate\Support\Facades\Facade;

/**
 * @method TransactionRepoService getTransactionByUuid($uuid)
 */
class TransactionRepo extends Facade
{
    public static function getFacadeAccessor()
    {
        return TransactionRepoService::class;
    }
}
