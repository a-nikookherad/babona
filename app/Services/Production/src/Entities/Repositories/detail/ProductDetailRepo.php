<?php

namespace Production\Entities\Repositories\detail;

use Illuminate\Support\Facades\Facade;

/**
 * @method static ProductDetailRepoService all()
 * @method static ProductDetailRepoService getById($id, $with = [])
 * @method static ProductDetailRepoService getByCondition($condition, $with = [])
 * @method static ProductDetailRepoService store($data)
 * @method static ProductDetailRepoService update($productDetails_id, array $data)
 * @method static ProductDetailRepoService updateOrCreate(array $condition, array $data)
 * @method static ProductDetailRepoService delete($productDetails_id)
 * @method static ProductDetailRepoService forceDelete($productDetails_id)
 */
class ProductDetailRepo extends Facade
{
    public static function getFacadeAccessor()
    {
        return ProductDetailRepoService::class;
    }
}
