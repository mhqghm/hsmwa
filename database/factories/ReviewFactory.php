<?php

namespace Database\Factories;

use App\Models\City;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Review>
 */
class ReviewFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {

        return [
            'user_id' => function () {
                return User::all()->random()->id;
            },
            'city_id' => function () {
                return City::all()->random()->id;
            },
            'city_mark' => fake()->numberBetween(1, 5),

        ];
    }
}
