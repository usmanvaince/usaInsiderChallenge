<?php

use Illuminate\Database\Seeder;
use App\Models\BatsMan;

class BattingStyleSeeder extends Seeder
{
    /**
     * Run the database seeds for batsman style
     *
     * @return void
     */
    public function run()
    {

          $bats_man_styles = [
                            [
                              'batsman_id'    => 1,
                              'style'         => 'Left-hand bat'
                            ],
                            [
                              'batsman_id'    => 2,
                              'style'         => 'Right-hand bat'
                            ],
                          ];
          foreach ($bats_man_styles as $bats_man_style)
          {
              BatsMan::updateOrCreate(['batsman_id' => $bats_man_style['batsman_id'] ] , $bats_man_style);
          }

    }
}
