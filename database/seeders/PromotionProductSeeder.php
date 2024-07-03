<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class PromotionProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        collect([
            [
                'menu_id' => 1
            ],
        ])->each(function ($promotion_product){
            DB::table('promotion_products')->insert($promotion_product);
        });
    }
}
