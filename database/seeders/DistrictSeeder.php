<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class DistrictSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        collect([
            [
                'area_id' => 1,
                'district_name' => 'Bubutan'
            ],

            [
                'area_id' => 1,
                'district_name' => 'Genteng'
            ],

            [
                'area_id' => 1,
                'district_name' => 'Gubeng'
            ],
        ])->each(function ($district){
            DB::table('districts')->insert($district);
        });
    }
}
