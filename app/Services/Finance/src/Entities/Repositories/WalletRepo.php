<?php

namespace Finance\Entities\Repositories;

use Illuminate\Support\Facades\Facade;

/**
 * @method WalletRepoService getByNameOrDefault($wallet)
 * @method WalletRepoService getInstance()
 * @method WalletRepoService getIds()
 * @method WalletRepoService create($walletInfo)
 */
class WalletRepo extends Facade
{
    public static function getFacadeAccessor()
    {
        return WalletRepoService::class;
    }
}
