<?php

namespace Database\Factories;

use App\Models\Product;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Product>
 */
class ProductFactory extends Factory
{
    protected $model = Product::class;

    public function definition(): array
    {
        return [
            'name' => fake()->name(),
            'description' => fake()->text(),
            'price' => fake()->numberBetween(0, 10000),
            'image' => fake()->imageUrl(600, 600),
            'stock' => fake()->numberBetween(0, 500),
            'attributes' => fake()->text(10),
            'category_id' => 3
        ];
    }
}
