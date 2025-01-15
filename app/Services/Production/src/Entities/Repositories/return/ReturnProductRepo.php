<?php

namespace Production\Entities\Repositories\return;

use Illuminate\Support\Facades\Facade;

/**
 * @method ReturnProductRepo store($data)
 */
class ReturnProductRepo extends Facade
{
    public static function getFacadeAccessor()
    {
        return ReturnProductRepoService::class;
    }
}
