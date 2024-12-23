<?php

namespace Production\Traits;

use Production\Entities\Repositories\storehouse\ProductDetailRepo;

trait StorehouseTrait
{
    public function storehouses(array $filter, int $perPage)
    {
        return ProductDetailRepo::storehouses($filter, $perPage);
    }

    public function storehouse($id)
    {
        return ProductDetailRepo::storehouse($id);
    }

    public function addStorehouse(array $data)
    {
        return ProductDetailRepo::store($data);
    }

    public function editStorehouse($id, array $data)
    {
        return ProductDetailRepo::update($id, $data);
    }

    public function destroyStorehouse($id)
    {
        return ProductDetailRepo::delete($id);

    }
}
