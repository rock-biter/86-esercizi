<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $categories = ['FrontEnd', 'Backend', 'Programming', 'Full stack', 'Design', 'Ops'];

        foreach ($categories as $category_name) {
            $new_cat = new Category();
            $new_cat->name = $category_name;
            $new_cat->slug = Str::slug($category_name);

            $new_cat->save();
        }
    }
}
