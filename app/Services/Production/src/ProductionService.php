<?php

namespace Production;

use Imanghafoori\Tags\Models\TempTag;
use Production\Traits\BasketTrait;
use Production\Traits\CategoryTrait;
use Production\Traits\ProductDetailTrait;
use Production\Traits\ProductTrait;

class ProductionService
{
    use CategoryTrait, ProductTrait, ProductDetailTrait, BasketTrait;

    public function tags()
    {
        return TempTag::query()
            ->distinct()
            ->pluck('title');
    }
}
