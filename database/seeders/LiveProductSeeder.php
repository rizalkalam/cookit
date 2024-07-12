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
                'section_id'=> 1,
                'delivery'=>'2024-07-04',
                'pre_order_from'=>'2024-07-04',
                'pre_order_until'=>'2024-07-28',
                'status'=>2,
            ],

            [
                'section_id'=> 2,
                'delivery'=>'2024-07-05',
                'pre_order_from'=>'2024-07-05',
                'pre_order_until'=>'2024-07-28',
                'status'=>2,
            ],

            [
                'section_id'=> 3,
                'delivery'=>'2024-07-06',
                'pre_order_from'=>'2024-07-06',
                'pre_order_until'=>'2024-07-28',
                'status'=>1,
            ],

            [
                'section_id'=> 4,
                'delivery'=>'2024-07-07',
                'pre_order_from'=>'2024-07-07',
                'pre_order_until'=>'2024-07-28',
                'status'=>1
            ],
        ])->each(function ($live_product){
            DB::table('live_products')->insert($live_product);
        });
    }
}
