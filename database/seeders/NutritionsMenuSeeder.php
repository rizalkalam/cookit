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
                'karbohidrat'=> 12,
                'protein'=> 12,
                'lemak'=> 12,
                'serat'=> 12,
                'natrium'=> 12,
                'kalori'=> 12,
            ],
        ])->each(function ($nutritions_menu){
            DB::table('nutritions_menus')->insert($nutritions_menu);
        });
    }
}
