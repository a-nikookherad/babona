<?php

namespace Production\Entities\Repositories\basket;

use Illuminate\Support\Facades\Facade;

/**
 * @method BasketRepo store($data)
 */
class BasketRepo extends Facade
{
    public static function getFacadeAccessor()
    {
        return BasketRepoService::class;
    }
}
