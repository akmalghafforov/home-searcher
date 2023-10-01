<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class PropertyFactory extends Factory
{
    public function definition(): array
    {
        $names = [
            'The Victoria',
            'The Xavier',
            'The Como',
            'The Aspen',
            'The Lucretia',
            'The Toorak',
            'The Skyscape',
            'The Clifton',
            'The Geneva',
        ];

        return [
            'name' => $names[array_rand($names)],
            'price' => fake()->numberBetween(100000, 500000),
            'bedrooms_count' => fake()->numberBetween(1, 5),
            'bathrooms_count' => fake()->numberBetween(1, 3),
            'storeys_count' => fake()->numberBetween(1, 2),
            'garages_count' =>  fake()->numberBetween(1, 2),
        ];
    }
}