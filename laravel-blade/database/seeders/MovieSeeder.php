<?php

namespace Database\Seeders;

use App\Models\Movie;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;

class MovieSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {

        for ($i = 0; $i < 100; $i++) {

            $movie = new Movie();

            $movie->title = $faker->words(3, true);
            $movie->rating = $faker->numberBetween(0, 5);
            $movie->language = $faker->randomElement(['it-IT', 'es', 'en-US']);
            $movie->poster_path = $faker->optional()->imageUrl();

            $movie->save();
        }
    }
}
