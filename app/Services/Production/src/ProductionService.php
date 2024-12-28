<?php

namespace Production;

use Production\Entities\Repositories\product\ProductRepo;
use Production\Traits\BasketTrait;
use Production\Traits\CategoryTrait;
use Production\Traits\ProductDetailTrait;
use Production\Traits\ProductTrait;

class ProductionService
{
    use CategoryTrait, ProductTrait, ProductDetailTrait, BasketTrait;


    public function products(callable $filter, int $perPage = 10)
    {
        return ProductRepo::getByFilterPaginate($filter, $perPage);
    }
}
