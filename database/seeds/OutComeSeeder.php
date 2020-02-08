<?php

use Illuminate\Database\Seeder;
use App\Models\OutCome;
class OutComeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $out_comes = [
            [
                'outcome_id'       => 1,
                'outcome_type'     => 'Result'
            ],
            [
                'outcome_id'       => 2,
                'outcome_type'     => 'No Result'
            ],
            [
                'outcome_id'       => 3,
                'outcome_type'     => 'superover'
            ]
        ];

        foreach ($out_comes as $out_come)
        {
            OutCome::updateOrCreate(['outcome_id' => $out_come['outcome_id']], $out_come);
        }


    }
}
