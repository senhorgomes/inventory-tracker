<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Item>
 */
class ItemFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            //
            'name' => fake()->word(),
            'description' => fake()->text(),
            'stock' => fake()->numberBetween(0, 100),
            'price' => fake()->numberBetween(10, 40),
            'sku' => fake()->numberBetween(100000, 999999),
            'category_id' => Category::factory(),
        ];
    }
}
