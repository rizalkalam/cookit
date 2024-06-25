<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class MenuTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        collect([
            [
                'name_type'=> 'Appetizer',
            ],

            [
                'name_type'=> 'Main Course',
            ],

            [
                'name_type'=> 'Dessert',
            ],
        ])->each(function ($menu_type){
            DB::table('menu_types')->insert($menu_type);
        });
    }
}
