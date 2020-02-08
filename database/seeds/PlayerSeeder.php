<?php

use Illuminate\Database\Seeder;
use App\Models\Country;
use App\Models\Player;
class PlayerSeeder extends Seeder
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
            for( $i = 0; $i < 11; $i++ )
            {
               $player_data = [
                 'player_name' => $faker->name('male'),
                 'dob'         => $faker->date('Y-m-d'),
                 'debut_date'  => $faker->date('Y-m-d'),
                 'batsman_id'  => rand(1,2),
                 'bowler_id'   => rand(1,7),
                 'team_id'     => $country->country_id
               ];

               Player::updateOrCreate(['player_name' => $player_data['player_name']], $player_data);
            }

        }
    }
}
