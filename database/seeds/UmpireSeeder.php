<?php

use Illuminate\Database\Seeder;
use App\Models\Umpire;

class UmpireSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $umpires = [
            [
                'umpire_id'        => 1,
                'umpire_name'      => 'Asad Rauf',
                'dob'              => '1956-03-12',
                'umpire_country_id' => 6
            ],
            [
                'umpire_id'        => 2,
                'umpire_name'      => 'Aleem Dar',
                'dob'              => '1968-06-06',
                'umpire_country_id' => 6
            ],
            [
                'umpire_id'        => 3,
                'umpire_name'      => 'SJ Davis',
                'dob'              => '1968-06-06',
                'umpire_country_id' => 10
            ],
            [
                'umpire_id'        => 4,
                'umpire_name'      => 'BF Bowden',
                'dob'              => '1968-06-06',
                'umpire_country_id' => 4
            ],
            [
                'umpire_id'        => 5,
                'umpire_name'      => 'SJ Davis',
                'dob'              => '1968-06-06',
                'umpire_country_id' => 10
            ],
            [
                'umpire_id'        => 6,
                'umpire_name'      => 'IL Howell',
                'dob'              => '1968-06-06',
                'umpire_country_id' => 2
            ],
        ];

        foreach ($umpires as $umpire)
        {
            Umpire::updateOrCreate([ 'umpire_id' => $umpire['umpire_id']] , $umpire);
        }
    }
}
