<?php

namespace Database\Factories;

use App\Models\Product;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\ProductComment>
 */
class ProductCommentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            "userId" => User::all()->random()->id,
            "productId" => Product::all()->random()->id,
            "comment" => $this->faker->paragraph,
            "created_at" => $this->faker->dateTime,
            "updated_at" => $this->faker->dateTime,
        ];
    }
}
