<?php

use Illuminate\Database\Seeder;
use App\Models\TossDecision;

class TossDecisionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $toss_decisions = [
            [
                'toss_id'       => 1,
                'toss_name'     => 'bat'
            ],
            [
                'toss_id'       => 2,
                'toss_name'     => 'field'
            ],
        ];
        foreach ($toss_decisions as $toss_decision)
        {
           TossDecision::updateOrCreate([ 'toss_id' => $toss_decision['toss_id']] , $toss_decision);
        }

    }
}
