<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\User;
use App\Models\Category;
use App\Models\City;
use App\Models\Review;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {

        User::factory(10)->create();
        City::factory(10)->create();
        Category::factory(6)->create();
        Review::factory(50)->create();

        foreach (Review::all() as $review) {
            $categories = Category::all()->random(fake()->numberBetween(0, 2));
            foreach ($categories as $category) {
                $review->categories()->attach($category, [
                    'mark' => fake()->numberBetween(1, 5),
                    'comment' => fake()->text(30),
                ]);
            }

        }
    }
}
