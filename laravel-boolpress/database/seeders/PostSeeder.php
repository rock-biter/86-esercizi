<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Post;
use App\Models\Tag;
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

        $category_ids = Category::all()->pluck('id')->all(); // [1,2,3,4,5,6]
        $tag_ids = Tag::all()->pluck('id')->all();

        for ($i = 0; $i < 50; $i++) {

            $post = new Post();
            $post->title = $faker->unique()->sentence($faker->numberBetween(3, 5));
            $post->content = $faker->optional()->text(500);
            $post->slug = Str::slug($post->title, '-');
            $post->category_id = $faker->optional()->randomElement($category_ids);
            $post->save();

            // fare dopo il metodo save altrimenti il post non avra un id
            $post->tags()->attach($faker->randomElements($tag_ids, rand(0, 5)));
        }
    }
}
