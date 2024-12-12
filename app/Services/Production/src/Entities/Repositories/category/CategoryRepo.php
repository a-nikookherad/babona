<?php

namespace Production\Entities\Repositories\category;

use Illuminate\Support\Facades\Facade;

/**
 * @method static CategoryRepoService all()
 * @method static CategoryRepoService getById($id)
 * @method static CategoryRepoService store($data)
 * @method static CategoryRepoService update($category_id, array $data)
 * @method static CategoryRepoService delete($category_id)
 * @method static CategoryRepoService forceDelete($category_id)
 */
class CategoryRepo extends Facade
{
    public static function getFacadeAccessor()
    {
        return CategoryRepoService::class;
    }
}
