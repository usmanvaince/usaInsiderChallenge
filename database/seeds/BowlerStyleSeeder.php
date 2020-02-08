<?php

use Illuminate\Database\Seeder;
use App\Models\Bowler;

class BowlerStyleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $bowler_styles = [
            [
                'bowler_id'    => 1,
                'style'         => 'Right-arm medium'
            ],
            [
                'bowler_id'    => 2,
                'style'        => 'Right-arm offbreak'
            ],
            [
                'bowler_id'    => 3,
                'style'        => 'Right-arm fast-medium'
            ],
            [
                'bowler_id'    => 4,
                'style'        => 'Legbreak googly'
            ],
            [
                'bowler_id'    => 5,
                'style'        => 'Right-arm medium-fast'
            ],
            [
                'bowler_id'    => 6,
                'style'        => 'Left-arm fast-medium'
            ],
            [
                'bowler_id'    => 7,
                'style'        => 'Slow left-arm orthodox'
            ],
            [
                'bowler_id'    => 8,
                'style'        => 'Slow left-arm chinaman'
            ],
            [
                'bowler_id'    => 9,
                'style'        => 'Left-arm medium-fast'
            ],
            [
                'bowler_id'    => 10,
                'style'        => 'Legbreak'
            ],
            [
                'bowler_id'    => 11,
                'style'        => 'Right-arm fast'
            ],
            [
                'bowler_id'    => 12,
                'style'        => 'Right-arm bowler'
            ],
            [
                'bowler_id'    => 13,
                'style'        => 'Left-arm medium'
            ],
            [
                'bowler_id'    => 14,
                'style'        => 'Left-arm fast'
            ],
        ];
        foreach ($bowler_styles as $bowler_style)
        {
            Bowler::updateOrCreate([  'bowler_id' => $bowler_style['bowler_id'] ] , $bowler_style);
        }
    }
}
