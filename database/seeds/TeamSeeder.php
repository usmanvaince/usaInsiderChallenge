<?php

use Illuminate\Database\Seeder;
use App\Models\Country;
use App\Models\Team;

class TeamSeeder extends Seeder
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
        foreach ($countries as $country)
        {
            $team_data = [
              'team_name'       => $country->country_name,
              'country_id'      => $country->country_id,
              'highest_total'   => rand(400, 500),
              'lowest_total'    => rand(50, 100),
              'rank'            => $country->country_id,
              'wins'            => rand(100, 500),
              'loses'           => rand(10, 200),
              'captain'         => $faker->name
            ];

            Team::updateOrCreate(['country_id' =>  $country->country_id], $team_data);
        }
    }
}
