<?php

namespace Production\Entities\Repositories\storehouse;

use Illuminate\Support\Facades\Facade;

/**
 * @method static StorehouseRepoService all()
 * @method static StorehouseRepoService getById($id)
 * @method static StorehouseRepoService store($data)
 * @method static StorehouseRepoService update($category_id, array $data)
 * @method static StorehouseRepoService delete($category_id)
 * @method static StorehouseRepoService forceDelete($category_id)
 */
class StorehouseRepo extends Facade
{
    public static function getFacadeAccessor()
    {
        return StorehouseRepoService::class;
    }
}
