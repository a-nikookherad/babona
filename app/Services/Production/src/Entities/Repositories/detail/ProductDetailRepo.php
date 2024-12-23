<?php

namespace Production\Entities\Repositories\detail;

use Illuminate\Support\Facades\Facade;

/**
 * @method static ProductDetailRepoService all()
 * @method static ProductDetailRepoService getById($id)
 * @method static ProductDetailRepoService store($data)
 * @method static ProductDetailRepoService update($category_id, array $data)
 * @method static ProductDetailRepoService updateOrCreate(array $condition, array $data)
 * @method static ProductDetailRepoService delete($category_id)
 * @method static ProductDetailRepoService forceDelete($category_id)
 */
class ProductDetailRepo extends Facade
{
    public static function getFacadeAccessor()
    {
        return ProductDetailRepoService::class;
    }
}
