<?php

use Illuminate\Database\Seeder;
use App\Models\Match;
use App\Models\Player;
use App\Models\MatchPlayer;

class MatchPlayerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        // This seed is supposed to be run once
        if( MatchPlayer::count() > 0)
        {
            return;
        }
        $matches = Match::all();
        foreach ( $matches as $match )
        {
            $team1_players = Player::where('team_id',$match->team_1)->get();
            $team2_players = Player::where('team_id',$match->team_2)->get();

            // Team 1 Players
            foreach ( $team1_players as $key => $player )
            {
               $this->updateMatchPlayer($this->prepareMatchPlayerData($match, $player, $key));
            }

            // Team2 Player
            foreach ( $team2_players as $player )
            {
                $this->updateMatchPlayer($this->prepareMatchPlayerData($match, $player, $key));
            }

        }
    }

    private function prepareMatchPlayerData(Match $match, Player $player, int $index)
    {
        $match_player = [
            'match_id'     => $match->match_id,
            'player_id'    => $player->player_id
        ];
        // Assign Captain role
        if ( $index === 0) {
            $match_player['role_id'] = 1;
        }
        // Assign Keeper Role
        elseif ( $index === 1 ) {
            $match_player['role_id'] = 2;
        }
        // Assign normal player role
        else {
            $match_player['role_id'] = 3;
        }
        return $match_player;
    }

    private function updateMatchPlayer($match_player=[])
    {
        MatchPlayer::Create($match_player);
    }
}
