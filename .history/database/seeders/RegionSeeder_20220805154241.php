<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class RegionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $regionsData = [
            [
                'name' => 'Nairobi',
            ],

            [
                'name' => 'Central',
            ],

            [
                'name' => 'Eastern',
            ],

            [
                'name' => 'North Eastern',
            ],

            [
                'name' => 'Coast',
            ],

            [
                'name' => 'Rift Valley',
            ],

            [
                'name' => 'Western',
            ],

            [
                'name' => 'Nyanza',
            ],
        ];

        $regions = County::all();
        
        if(count($regions) < 1){
            foreach($countiesData as $county)
            {
                County::create($county);
            }
        }
    }
}
