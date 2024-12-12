<?php

namespace Production\Entities\Repositories\price;

use Illuminate\Support\Facades\Facade;

/**
 * @method static PriceRepoService all()
 * @method static PriceRepoService getById($id)
 * @method static PriceRepoService store($data)
 * @method static PriceRepoService update($category_id, array $data)
 * @method static PriceRepoService delete($category_id)
 * @method static PriceRepoService forceDelete($category_id)
 */
class PriceRepo extends Facade
{
    public static function getFacadeAccessor()
    {
        return PriceRepoService::class;
    }
}
