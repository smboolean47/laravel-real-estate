<?php

use Illuminate\Database\Seeder;
use Faker\Generator as Faker;
use App\House;

class HousesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for($i = 0; $i < 100; $i++) {
            $house = new House();
            $house->address = $faker->streetAddress();
            $house->postal_code = $faker->postcode();
            $house->city = $faker->city();
            $house->country = $faker->country();
            $house->rooms = $faker->randomDigit();
            $house->sqm = $faker->numberBetween(20, 10000);
            $house->price = $faker->randomFloat(2, 1000, 300000000);
            $house->year = $faker->year();
            $house->description = $faker->text(400);
            $house->furnished = $faker->numberBetween(0, 1);
            $house->save();
        }
    }
}
