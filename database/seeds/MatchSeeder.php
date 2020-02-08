<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;
use App\Models\Match;

class MatchSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i = 0; $i <= 2; $i++)
        {
            $match_data=[
              'match_id'    => ++$i,
              'match_date'  => Carbon::now()->toDateString(),
              'team_1'      => rand(1,5),
              'team_2'      => rand(6,12),
              'venue_id'    => rand(1,12),
              'toss_decide' => 1,

            ];
            $match_data['toss_winner'] = $match_data['team_1'];
            Match::updateOrCreate(['match_id' => $match_data['match_id']], $match_data);
        }
    }
}
