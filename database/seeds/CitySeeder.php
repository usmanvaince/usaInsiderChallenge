<?php

use Illuminate\Database\Seeder;
use App\Models\Country;
use App\Models\City;

class CitySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $countries = Country::all();
        $faker = Faker\Factory::create();
        foreach ( $countries as $country )
        {
            $city_date = [
              'city_name'  => $faker->city,
              'country_id' => $country->country_id
            ];

            City::updateOrCreate(['city_name' => $city_date[ 'city_name' ] ] , $city_date);
        }
    }
}
