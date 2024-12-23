<?php

namespace Production\Traits;

use Production\Entities\Repositories\product\ProductRepo;

trait ProductTrait
{
    public function products(callable $filter, int $perPage = 10)
    {
        return ProductRepo::getByFilterPaginate($filter, $perPage);
    }

    public function destroyProduct($id)
    {
        return ProductRepo::delete($id);

    }
}
