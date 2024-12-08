<?php

namespace Production\Traits;

use Production\Entities\Models\Basket;

trait BasketTrait
{
    public function basket($user_id)
    {
        return Basket::query()
            ->where("user_id", $user_id)
            ->with("prices")
            ->first();
    }

    public function addToBasket($user_id, $prices)
    {
        $basket = Basket::query()
            ->where("user_id", $user_id)
            ->where("bought_at", null)
            ->firstOr(function () use ($user_id) {
                return Basket::query()->create(["user_id" => $user_id]);
            });
        return $basket->prices()->sync($prices);
    }
}
