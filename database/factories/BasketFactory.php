<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;
use Production\Entities\Models\Basket;

class BasketFactory extends Factory
{
    protected $model = Basket::class;

    public function definition(): array
    {
        return [
            "user_id" => User::first()->id ?? User::factory()->create()->id,
            "bought_at" => null
        ];
    }
}
