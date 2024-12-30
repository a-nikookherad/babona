<?php

namespace Production\Database\Factories;

use App\Models\Merchant;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;
use Production\Entities\Models\Product;
use Production\Entities\Models\ProductDetail;


class ProductDetailFactory extends Factory
{
    protected $model = ProductDetail::class;

    public function definition(): array
    {
        $res= [
            "id" => fake()->numberBetween(1, 10),
            "size" => fake()->realTextBetween(3, 20),
            "color" => fake()->colorName(),
            "price" => fake()->numberBetween(100000, 10000000),
//            "tax" => fake(),
//            "discount" => fake(),
//            "discount_percentage" => fake(),
//            "discount_expired_at" => fake(),
//            "quantity_add_from_prev" => fake(),
            "quantity" => fake()->numberBetween(20, 40),
//            "quantity_remain_before_deleting" => fake(),
//            "net_price" => fake(),
            "product_id" => Product::first()->id ?? Product::factory()->create()->id,
            "merchant_id" => Merchant::first()->id ?? Merchant::factory()->create()->id,
            "add_by_user_id" => User::first()->id ?? User::factory()->create()->id,
        ];
//        dd($res);
        return $res;
    }
}
