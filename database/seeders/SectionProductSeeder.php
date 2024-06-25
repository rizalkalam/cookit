<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class SectionProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        collect([
            [
                'section_number'=>'#Section_1',
                'appetizer_menu_id'=> 5,
                'maincourse_menu_id'=>null,
                'dessert_menu_id'=>3,
            ],

            [
                'section_number'=>'#Section_2',
                'appetizer_menu_id'=> 1,
                'maincourse_menu_id'=> null,
                'dessert_menu_id'=>null,
            ],

            [
                'section_number'=>'#Section_3',
                'appetizer_menu_id'=> null,
                'maincourse_menu_id'=>2,
                'dessert_menu_id'=>null,
            ],

            [
                'section_number'=>'#Section_4',
                'appetizer_menu_id'=> null,
                'maincourse_menu_id'=>null,
                'dessert_menu_id'=>null,
            ],
        ])->each(function ($section_product){
            DB::table('section_products')->insert($section_product);
        });
    }
}
