<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class FurtherInformationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        collect([
            [
                'menu_id'=> 1,
                'tools'=> null,
                'difficulty'=> null,
                'material'=> null,
                'serving_time'=> null,
                'time_format'=> null
            ],

            [
                'menu_id'=> 2,
                'tools'=> null,
                'difficulty'=> null,
                'material'=> null,
                'serving_time'=> null,
                'time_format'=> null
            ],

            [
                'menu_id'=> 3,
                'tools'=> null,
                'difficulty'=> null,
                'material'=> null,
                'serving_time'=> null,
                'time_format'=> null
            ],

            [
                'menu_id'=> 4,
                'tools'=> null,
                'difficulty'=> null,
                'material'=> null,
                'serving_time'=> null,
                'time_format'=> null
            ],

            [
                'menu_id'=> 5,
                'tools'=> null,
                'difficulty'=> null,
                'material'=> null,
                'serving_time'=> null,
                'time_format'=> null
            ],

            [
                'menu_id'=> 6,
                'tools'=> null,
                'difficulty'=> null,
                'material'=> null,
                'serving_time'=> null,
                'time_format'=> null
            ],

            [
                'menu_id'=> 7,
                'tools'=> null,
                'difficulty'=> null,
                'material'=> null,
                'serving_time'=> null,
                'time_format'=> null
            ],

            [
                'menu_id'=> 8,
                'tools'=> null,
                'difficulty'=> null,
                'material'=> null,
                'serving_time'=> null,
                'time_format'=> null
            ],

            [
                'menu_id'=> 9,
                'tools'=> null,
                'difficulty'=> null,
                'material'=> null,
                'serving_time'=> null,
                'time_format'=> null
            ],

            [
                'menu_id'=> 10,
                'tools'=> null,
                'difficulty'=> null,
                'material'=> null,
                'serving_time'=> null,
                'time_format'=> null
            ],

            [
                'menu_id'=> 11,
                'tools'=> null,
                'difficulty'=> null,
                'material'=> null,
                'serving_time'=> null,
                'time_format'=> null
            ],

            [
                'menu_id'=> 12,
                'tools'=> null,
                'difficulty'=> null,
                'material'=> null,
                'serving_time'=> null,
                'time_format'=> null
            ],
        ])->each(function ($further_information){
            DB::table('further_information')->insert($further_information);
        });
    }
}
