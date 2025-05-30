<?php

namespace Database\Factories;

use Address\Entities\Models\Address;
use Address\Entities\Models\City;
use Illuminate\Database\Eloquent\Factories\Factory;

class AddressFactory extends Factory
{
    protected $model = Address::class;

    public function definition(): array
    {
        return [
            "type" => fake()->randomElement([
                "work_place",
                "home",
            ]),
            "is_active" => true,
            "longitude" => fake()->longitude(-100, 100),
            "latitude" => fake()->latitude(-90, 90),
            "address" => fake()->address(),
            "place" => fake()->numberBetween(1, 200),
            "postal_code" => fake()->postcode(),
            "phone_number" => fake()->phoneNumber(),
            "city_id" => ($city = City::with("state")->where("id", fake()->numberBetween(1, 100))->first())->id,
            "state_id" => $city->state->id,
        ];
    }
}
