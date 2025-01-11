<?php

namespace Production\Traits;

use Production\Entities\Models\Basket;

trait BasketTrait
{
    public function basket($user_id)
    {
        return Basket::query()
            ->where("user_id", $user_id)
            ->whereNull("bought_at")
            ->with("productDetails")
            ->first();
    }

    public function addToTheBasket($user_id, $productDetails)
    {
        $productDetailData = [];
        foreach ($productDetails as $productDetail_id => $quantity) {
            $productDetailData[$productDetail_id]["created_at"] = now()->format("Y-m-d H:i:s");
            $productDetailData[$productDetail_id]["updated_at"] = now()->format("Y-m-d H:i:s");
            $productDetailData[$productDetail_id]["quantity"] = $quantity;
        }
        $basket = Basket::query()
            ->where("user_id", $user_id)
            ->whereNull("bought_at")
            ->firstOr(function () use ($user_id) {
                return Basket::query()
                    ->create(["user_id" => $user_id]);
            });
        return $basket->productDetails()->sync($productDetailData);
    }

    public function setBasketBoughtAt($basket_id)
    {

    }
}
