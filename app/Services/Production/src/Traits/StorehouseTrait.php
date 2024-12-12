<?php

namespace Production\Traits;

use Production\Entities\Repositories\storehouse\StorehouseRepo;

trait StorehouseTrait
{
    public function storehouses(array $filter, int $perPage)
    {
        return StorehouseRepo::storehouses($filter, $perPage);
    }

    public function storehouse($id)
    {
        return StorehouseRepo::storehouse($id);
    }

    public function addStorehouse(array $data)
    {
        return StorehouseRepo::store($data);
    }

    public function editStorehouse($id, array $data)
    {
        return StorehouseRepo::update($id, $data);
    }

    public function destroyStorehouse($id)
    {
        return StorehouseRepo::delete($id);

    }
}
