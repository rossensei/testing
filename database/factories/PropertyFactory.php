<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Property>
 */
class PropertyFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'property_no' => fake()->ean8(),
            'property_name' => fake()->words(3 ,true),
            'description' => fake()->sentence(),
            'measurement_unit' => fake()->randomElement(['pc', 'bx', 'kg', 'm']),
            'unit_value' => fake()->numberBetween(500, 1000),
            'acquisition_date' => fake()->date(),
            'received_from' => fake()->randomElement(range(1, 10)),
            'assigned_to' => fake()->randomElement(range(1, 10)),
        ];
    }
}
