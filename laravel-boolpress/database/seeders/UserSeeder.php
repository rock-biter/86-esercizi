<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Faker\Generator as Faker;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        $user = User::create([
            'name' => 'Gianluca Lomarco',
            'email' => 'gianluca.lomarco@gmail.com',
            'password' => Hash::make('gianluca'),
        ]);

        for ($i = 0; $i < 15; $i++) {

            User::create([
                'name' => $faker->name(),
                'email' => $faker->unique()->email(),
                'password' => Hash::make($faker->word())
            ]);
        }
    }
}
