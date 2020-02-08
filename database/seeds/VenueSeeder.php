<?php

use Illuminate\Database\Seeder;
use App\Models\City;
use App\Models\Venue;

class VenueSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $cities = City::all();
        $faker = Faker\Factory::create();
        foreach ($cities as $city)
        {

            $venueData = [
              'venue_name'   => $faker->address,
              'city_id'      => $city->city_id
            ];
            Venue::updateOrCreate([ 'venue_name' => $venueData['venue_name'] ], $venueData);
        }
    }
}
