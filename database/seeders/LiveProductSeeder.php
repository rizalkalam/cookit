<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class LiveProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        collect([
            [
                'name'=>'#Section 1',
                'delivery'=>'2023-05-04',
                'pre_order_from'=>'2023-05-04',
                'pre_order_until'=>'2023-05-28',
                'appetizer_menu_id'=> null,
                'main_course_menu_id'=>null,
                'dessert_menu_id'=>null,
                'status'=>'empty',
            ],

            [
                'name'=>'#Section 2',
                'delivery'=>'2023-05-05',
                'pre_order_from'=>'2023-05-05',
                'pre_order_until'=>'2023-05-28',
                'appetizer_menu_id'=> null,
                'main_course_menu_id'=>null,
                'dessert_menu_id'=>null,
                'status'=>'empty',
            ],

            [
                'name'=>'#Section 3',
                'delivery'=>'2023-05-06',
                'pre_order_from'=>'2023-05-06',
                'pre_order_until'=>'2023-05-28',
                'appetizer_menu_id'=> null,
                'main_course_menu_id'=>null,
                'dessert_menu_id'=>null,
                'status'=>'empty',
            ],

            [
                'name'=>'#Section 4',
                'delivery'=>'2023-05-07',
                'pre_order_from'=>'2023-05-07',
                'pre_order_until'=>'2023-05-28',
                'appetizer_menu_id'=> null,
                'main_course_menu_id'=>null,
                'dessert_menu_id'=>null,
            ],
        ])->each(function ($live_product){
            DB::table('live_products')->insert($live_product);
        });
    }
}
