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
                'tools'=> 'Tusukan kayu/sate',
                'difficulty'=> 'Sedang',
                'material'=>'Air mineral 200ml',
                'serving_time'=> '45',
                'time_format'=>'Menit'
            ],
            [
                'menu_id'=> 2,
                'tools'=> 'Panci',
                'difficulty'=> 'Sulit',
                'material'=>'Air mineral 200ml',
                'serving_time'=> '2',
                'time_format'=>'Jam'
            ],
        ])->each(function ($further_information){
            DB::table('further_information')->insert($further_information);
        });
    }
}
