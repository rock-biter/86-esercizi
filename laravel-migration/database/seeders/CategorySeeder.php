<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $categories = [
            'Cibo',
            'Viaggi',
            'Sport',
            'Bellezza',
            'Benessere',
            'Informatica',
            'Auto'
        ];

        foreach ($categories as $category_name) {
            $cat = new Category();

            $cat->name = $category_name;
            $cat->save(); //INSERT INTO `categories` VALUES ...

        }
    }
}
