<?php

namespace Production\Entities\Repositories\product;

use Illuminate\Support\Facades\Facade;

/**
 * @method static ProductRepoService all()
 * @method static ProductRepoService paginate(int $perPage)
 * @method static ProductRepoService getById($id, array $with = [])
 * @method static ProductRepoService getByRelation($relation, $whereHas, $where = [], $with = [])
 * @method static ProductRepoService store($data)
 * @method static ProductRepoService update($product_id, array $data)
 * @method static ProductRepoService delete($product_id)
 * @method static ProductRepoService forceDelete($product_id)
 */
class ProductRepo extends Facade
{
    public static function getFacadeAccessor()
    {
        return ProductRepoService::class;
    }
}
