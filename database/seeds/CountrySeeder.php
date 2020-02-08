<?php

use Illuminate\Database\Seeder;
use App\Models\Country;

class CountrySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $countries = [
            [
                'country_id'    => 1,
                'country_name'  => 'India'
            ],
            [
                'country_id'    => 2,
                'country_name'  => 'South Africa'
            ],
            [
                'country_id'    => 3,
                'country_name'  => 'U.A.E'
            ],
            [
                'country_id'    => 4,
                'country_name'  => 'New Zealand'
            ],
            [
                'country_id'    => 5,
                'country_name'  => 'Australia'
            ],
            [
                'country_id'    => 6,
                'country_name'  => 'Pakistan'
            ],
            [
                'country_id'    => 7,
                'country_name'  => 'Sri Lanka'
            ],
            [
                'country_id'    => 8,
                'country_name'  => 'West Indies'
            ],
            [
                'country_id'    => 9,
                'country_name'  => 'Zimbabwea'
            ],
            [
                'country_id'    => 10,
                'country_name'  => 'England'
            ],
            [
                'country_id'    => 11,
                'country_name'  => 'Bangladesh'
            ],
            [
                'country_id'    => 12,
                'country_name'  => 'Netherlands'
            ],
        ];
        foreach ($countries as $item)
        {
            Country::updateOrCreate(['country_id' => $item['country_id'] ] , $item);
        }

    }
}
