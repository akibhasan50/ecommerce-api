<?php

namespace Database\Factories;

use App\Models\Review;
use App\Models\Product;
use Illuminate\Database\Eloquent\Factories\Factory;

class ReviewFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Review::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'product_id' =>Product::all()->random()->id,
            'customer' => $this->faker->firstName,
            'review' => $this->faker->paragraph(rand(3,7),true), 
            'star' => $this->faker->numberBetween(1,5),
        ];
    }
}
