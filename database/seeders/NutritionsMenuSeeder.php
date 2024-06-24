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
                'karbohidrat_unit'=> 1,
                'protein'=> 13,
                'protein_unit'=> 2,
                'lemak'=> 17,
                'lemak_unit'=> 1,
                'serat'=> 77,
                'serat_unit'=> 2,
                'natrium'=> 20,
                'natrium_unit'=> 1,
                'kalori'=> 8,
                'kalori_unit'=> 3,
                'unit_id'=>1,
            ],
        ])->each(function ($nutritions_menu){
            DB::table('nutritions_menus')->insert($nutritions_menu);
        });
    }
}
