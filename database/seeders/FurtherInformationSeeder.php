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
                'unit_id'=>1,
            ],
            [
                'menu_id'=> 2,
                'tools'=> '',
                'qty'=> 3,
                'unit_id'=>1,
            ],
        ])->each(function ($to_sent){
            DB::table('to_sents')->insert($to_sent);
        });
    }
}
