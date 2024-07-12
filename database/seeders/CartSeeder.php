<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class CartSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        collect([
            [
                'user_id' => 2,
                'product_id' => 1,
                'qty' => 1,
                'total_price' => 13000,
            ],

            [
                'user_id' => 2,
                'product_id' => 2,
                'qty' => 2,
                'total_price' => 26000,
            ],
        ])->each(function ($cart){
            DB::table('carts')->insert($cart);
        });
    }
}
