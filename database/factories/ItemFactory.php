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
            'name' => $this->faker->name,
            'description' => $this->faker->sentence,
            'stock' => $this->faker->numberBetween(0, 100),
            'price' => $this->faker->numberBetween(10, 40),
            'sku' => $this->faker->unique()->numberBetween(100000, 999999),
            'category_id' => Category::factory(),
        ];
    }
}
