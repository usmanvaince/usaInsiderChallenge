<?php

use Illuminate\Database\Seeder;
use App\Models\OutType;

class OutTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $out_types = [
            [
                'out_id'       => 1,
                'out_name'     => 'caught'
            ],
            [
                'out_id'       => 2,
                'out_name'     => 'bowled'
            ],
            [
                'out_id'       => 3,
                'out_name'     => 'run out'
            ],
            [
                'out_id'       => 4,
                'out_name'     => 'lbw'
            ],
            [
                'out_id'       => 5,
                'out_name'     => 'retired hurt'
            ],
            [
                'out_id'       => 6,
                'out_name'     => 'caught and bowled'
            ],
            [
                'out_id'       => 7,
                'out_name'     => 'hit wicket'
            ],
            [
                'out_id'       => 8,
                'out_name'     => 'obstructing the field'
            ],

        ];
        foreach ($out_types as $out_type)
        {
            OutType::updateOrCreate([  'out_id' =>  $out_type['out_id'] ] , $out_type);
        }
    }
}
