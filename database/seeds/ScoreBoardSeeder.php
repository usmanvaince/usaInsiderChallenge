<?php

use Illuminate\Database\Seeder;
use App\Models\Match;
use App\Models\BatsManScoreBoard;
use App\Models\Player;
use App\Models\BowlerBoard;
use App\Models\BallToBallMatch;
use App\Models\Team;

class ScoreBoardSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    private $strikerPlayer, $nonStrikerPlayer, $bowler;
    public function run()
    {
        $matches  = Match::all();
        foreach ( $matches  as $match )
        {
            $team1_bats_mans = $match->team1->players;
            foreach ( $team1_bats_mans as $key => $player )
            {
                if( $key === 0)
                {
                    $over_id = $ball_id = 1;
                    $this->strikerPlayer = $player;
                }
                else {
                    $over_id = $ball_id = 0;
                }
                if ( $key === 1 )
                {
                    $this->nonStrikerPlayer = $player;
                }

                $this->updateBatsManScoreBoard($match, $player, $over_id, $ball_id);
            }

            $team2_bowlers = $match->team2->players->take(5);

            foreach ( $team2_bowlers as $key => $player )
            {
                if( $key === 0)
                {
                    $over_id = $ball_id = 1;
                    $this->bowler = $player;
                } else {
                    $over_id = $ball_id = 0;
                }

                $this->updateBowlerBoard($match, $player, $over_id, $ball_id);
            }

            $this->updateBallToBall( $match, $match->team1, $match->team2, $this->strikerPlayer, $this->nonStrikerPlayer, $this->bowler );

        }
    }

    private function updateBatsManScoreBoard(Match $match, Player $player, $over_id, $ball_id)
    {
        $data = [
            'match_id'    =>  $match->match_id,
            'batsman_id'  =>  $player->player_id,
            'over_id'     =>  $over_id,
            'ball_id'     =>  $ball_id,
            'runs_scored' =>  0,
            'innings_no'  =>  1
        ];
        BatsManScoreBoard::updateOrCreate($data);
    }
    private function updateBowlerBoard( Match $match, Player $player, $over_id, $ball_id )
    {
        $data = [
            'match_id'    =>  $match->match_id,
            'bowler_id'   =>  $player->player_id,
            'over_id'     =>  $over_id,
            'ball_id'     =>  $ball_id,
            'maiden'      =>  0,
            'wickets'     =>  0,
            'innings_no'  =>  1
        ];
        BowlerBoard::updateOrCreate($data);
    }
    private function updateBallToBall(Match $match,Team $batingTeam, Team $bowlingTeam, Player $striker, Player $nonStriker, Player $bowler )
    {
        $data = [
            'match_id'                 =>  $match->match_id,
            'batting_team_id'          =>  $batingTeam->team_id,
            'bowling_team_id'          =>  $bowlingTeam->team_id,
            'striker_batsman_id'       =>  $striker->player_id,
            'non_striker_batsman_id'   =>  $nonStriker->player_id,
            'bowler_id'                =>  $bowler->player_id,
            'over_id'                  =>  1,
            'ball_id'                  =>  1,
            'innings_no'               =>  1,
        ];
        BallToBallMatch::Create($data);
    }
}
