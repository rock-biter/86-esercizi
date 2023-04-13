<?php

namespace Database\Seeders;

use App\Models\House;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;

class HouseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        $types = ['monolocale', 'bilocale', 'trilocale', 'bifamigliare'];

        for ($i = 0; $i < 100000; $i++) {

            $num_bagni = $faker->numberBetween(1, 6);
            $num_stanze = $num_bagni + $faker->numberBetween(1, 24);
            $metri_quadri = $num_stanze * 12;
            $prezzo = $metri_quadri * 2500;

            $new_house = new House();
            $new_house->reference = $faker->bothify('??-#########');
            $new_house->address = $faker->streetAddress();
            $new_house->postal_code = $faker->bothify('#####');
            $new_house->city = $faker->city();
            $new_house->state = $faker->state();
            $new_house->square_meters = $metri_quadri;
            $new_house->rooms = $num_stanze;
            $new_house->bathrooms = $num_bagni;
            $new_house->type = $faker->randomElement($types);
            $new_house->description = $faker->paragraphs(3, true);
            $new_house->price = $prezzo;
            $new_house->is_available = $faker->randomElement([0, 1]);
            $new_house->energy_rating = $faker->randomElement(['a++', 'a', 'b', 'c', 'd']);

            $new_house->save();
        }
    }
}
