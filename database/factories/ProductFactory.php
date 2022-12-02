<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;


/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Product>
 */
class ProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        // $image = ['https://loremflickr.com/500/500'];
        return [
            'product_name' => fake()->words(3, true),
            'price' => fake()->randomNumber(7, true),
            'stock' => fake()->randomNumber(3, true),
            'description' => fake()->sentence(mt_rand(8,20)),
            // 'images' => fake()->imageUrl(500, 500, true)
            // 'images' => unique()->'https://loremflickr.com/500/500'
        ];
    }
}
