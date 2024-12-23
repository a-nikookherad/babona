<?php

namespace Production\Traits;


use Production\Entities\Repositories\price\PriceRepo;

trait ProductDetailTrait
{
    public function prices(array $filter, int $perPage)
    {
        return PriceRepo::prices($filter, $perPage);
    }

    public function price($id)
    {
        return PriceRepo::price($id);
    }

    public function addPrice(array $data)
    {
        return PriceRepo::store($data);
    }

    public function editPrice($id, array $data)
    {
        return PriceRepo::update($id, $data);
    }

    public function destroyPrice($id)
    {
        return PriceRepo::delete($id);

    }
}
