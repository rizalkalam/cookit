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
                'district_name' => 'Bubutan',
                'shipping_cost' => 12000
            ],

            [
                'area_id' => 1,
                'district_name' => 'Genteng',
                'shipping_cost' => 18000
            ],

            [
                'area_id' => 1,
                'district_name' => 'Gubeng',
                'shipping_cost' => 22000
            ],

            [
                'area_id' => 1,
                'district_name' => 'Banyuanyar',
                'shipping_cost' => 11000
            ],
        ])->each(function ($district){
            DB::table('districts')->insert($district);
        });
    }
}
