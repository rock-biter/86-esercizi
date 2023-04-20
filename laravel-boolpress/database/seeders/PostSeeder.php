<?php

namespace Database\Seeders;

use App\Models\Post;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;
use Illuminate\Support\Str;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for ($i = 0; $i < 50; $i++) {

            $post = new Post();
            $post->title = $faker->unique()->sentence($faker->numberBetween(3, 5));
            $post->content = $faker->optional()->text(500);
            $post->slug = Str::slug($post->title, '-');
            $post->save();
        }
    }
}
