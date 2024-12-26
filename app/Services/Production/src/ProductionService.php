<?php

namespace Production;

use Production\Traits\BasketTrait;
use Production\Traits\CategoryTrait;
use Production\Traits\ProductDetailTrait;
use Production\Traits\ProductTrait;

class ProductionService
{
    use CategoryTrait, ProductTrait, ProductDetailTrait, BasketTrait;

    public function destroyProduct($product)
    {
        $allow = true;
        foreach ($product->productDetails as $productDetail) {
            if ($productDetail->hasPaidBaskets()) {
                $allow = false;
            }
        }

        if ($allow) {
            $product->delete();
        }

        return $allow;
    }
}
