<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class ToSentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        collect([
            [
                'menu_id'=> 1,
                'material_id'=> 1,
                'qty'=> 2,
                'unit_id'=>1,
            ],
            [
                'menu_id'=> 1,
                'material_id'=> 2,
                'qty'=> 3,
                'unit_id'=>1,
            ],
        ])->each(function ($to_sent){
            DB::table('to_sents')->insert($to_sent);
        });
    }
}
