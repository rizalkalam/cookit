<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class NutritionsMenuSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        collect([
            [
                'menu_id'=> 1,
                'karbohidrat'=> 1,
                'karbohidrat_unit_id'=> 1,
                'protein'=> 13,
                'protein_unit_id'=> 2,
                'lemak'=> 17,
                'lemak_unit_id'=> 1,
                'serat'=> 77,
                'serat_unit_id'=> 2,
                'natrium'=> 20,
                'natrium_unit_id'=> 1,
                'kalori'=> 8,
                'kalori_unit_id'=> 3,
            ],
        ])->each(function ($nutritions_menu){
            DB::table('nutritions_menus')->insert($nutritions_menu);
        });
    }
}
