<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class ProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'title' => $this->faker->text(mt_rand(20,21)),
            'subtitle' => $this->faker->paragraph(mt_rand(2, 3)),
            'price' => $this->faker->randomNumber(mt_rand(7, 8)),
            'category_id' => mt_rand(1,5)
        ];
    }
}
