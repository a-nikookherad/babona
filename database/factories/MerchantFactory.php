<?php

namespace Database\Factories;

use App\Models\Merchant;
use Illuminate\Database\Eloquent\Factories\Factory;


class MerchantFactory extends Factory
{
    protected $model = Merchant::class;

    public function definition(): array
    {
        return [
            "id" => fake()->numberBetween(1, 20),
            "name" => fake()->randomElement([
                "babona",
                "parsian posh",
            ]),
            "fa_name" => fake()->randomElement([
                "بابونا",
                "پارسیان پوش",
            ]),
            "brand" => fake()->randomElement([
                "babona",
                "parsian posh",
            ]),
//            "static_costs" => fake(),
        ];
    }
}
