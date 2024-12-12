<?php

namespace Production\Entities\Repositories\product;

use Illuminate\Support\Facades\Facade;

/**
 * @method static ProductRepoService all()
 * @method static ProductRepoService getById($id)
 * @method static ProductRepoService store($data)
 * @method static ProductRepoService update($category_id, array $data)
 * @method static ProductRepoService delete($category_id)
 * @method static ProductRepoService forceDelete($category_id)
 */
class ProductRepo extends Facade
{
    public static function getFacadeAccessor()
    {
        return ProductRepoService::class;
    }
}
