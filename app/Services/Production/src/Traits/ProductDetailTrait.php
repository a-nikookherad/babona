<?php

namespace Production\Traits;


use Illuminate\Support\ItemNotFoundException;
use Production\Entities\Repositories\detail\ProductDetailRepo;
use Symfony\Component\Finder\Exception\AccessDeniedException;

trait ProductDetailTrait
{
    public function increaseProductDetailsQuantities($productDetails_id, $currentUser, $count = 1)
    {
        $productDetails = $this->getProductDetails($productDetails_id, $currentUser);

        $productDetails->quantity = $productDetails->quantity + $count;
        $productDetails->save();
        return $productDetails;
    }

    public function decreaseProductDetailsQuantities($productDetails_id, $currentUser, $count = 1)
    {
        $productDetails = $this->getProductDetails($productDetails_id, $currentUser);

        $productDetails->quantity = $productDetails->quantity - $count;
        $productDetails->save();
        return $productDetails;
    }

    private function getProductDetails($productDetails_id, $currentUser)
    {
        $productDetails = ProductDetailRepo::getById($productDetails_id);

        if (!$productDetails) {
            throw new ItemNotFoundException("This product details not exists");
        }

        //check authorization to change quantity
        if ($productDetails->merchant_id != $currentUser->merchant_id) {
            //return or rise an error
            throw new AccessDeniedException("You can't manipulate this details for this product because you are not owner of this product");
        }
        return $productDetails;
    }
}
