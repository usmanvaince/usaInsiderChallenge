<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(BattingStyleSeeder::class);
        $this->call(BowlerStyleSeeder::class);
        $this->call(CountrySeeder::class);
        $this->call(RoleSeeder::class);
        $this->call(WinTypeSeeder::class);
        $this->call(UmpireSeeder::class);
        $this->call(TossDecisionSeeder::class);
        $this->call(OutTypeSeeder::class);
        $this->call(TeamSeeder::class);
        $this->call(CitySeeder::class);
        $this->call(VenueSeeder::class);
        $this->call(OutComeSeeder::class);
        $this->call(PlayerSeeder::class);
        $this->call(MatchSeeder::class);
        $this->call(MatchPlayerSeeder::class);
        $this->call(ScoreBoardSeeder::class);
    }
}
