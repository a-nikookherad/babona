<?php

namespace Production\Traits;

use Production\Entities\Repositories\product\ProductRepo;

trait ProductTrait
{
    public function products(callable $filter, int $perPage = 10)
    {
        return ProductRepo::getByFilterPaginate($filter, $perPage);
    }

    public function product($id)
    {
        return ProductRepo::getById($id);
    }

    public function addProduct(array $data)
    {
        return ProductRepo::store($data);
    }

    public function editProduct($product_id, array $data)
    {
        return ProductRepo::update($product_id, $data);
    }

    public function destroyProduct($id)
    {
        return ProductRepo::delete($id);

    }
}
