<?php

use Illuminate\Database\Seeder;
use App\Models\WinType;

class WinTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $win_types = [
            [
                'win_id'       => 1,
                'win_type'     => 'runs'
            ],
            [
                'win_id'       => 2,
                'win_type'     => 'wickets'
            ],
            [
                'win_id'       => 3,
                'win_type'     => 'no result'
            ],
            [
                'win_id'       => 4,
                'win_type'     => 'tie'
            ],
        ];
        foreach ($win_types as $win_type)
        {
            WinType::updateOrCreate(['win_id' => $win_type['win_id'] ] , $win_type);
        }
    }
}
