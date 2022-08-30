<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Ward;

class WardsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $wards = Ward::all();
        
        if(count($subCounties) < 1){
            foreach($subCountiesData as $subCounty)
            {
                Ward::create($subCounty);
            }
        }
    }
}