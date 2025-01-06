<?php

namespace Package\Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class PackageFactory extends Factory
{
//    protected $model = Package::class;

    public function definition(): array
    {
        return [
            "name" => fake()->name,
        ];
    }
}
