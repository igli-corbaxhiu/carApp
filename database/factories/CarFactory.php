<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class CarFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'brand' => $this->faker->text(10),
            'prod_year' => rand(2000, 2022),
            'category_id' => rand(1,4)
        ];
    }
}
