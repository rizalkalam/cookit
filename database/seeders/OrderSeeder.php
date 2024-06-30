<?php

namespace Database\Seeders;

use Illuminate\Support\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class OrderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        collect([
            [
                'user_id'=>2,
                'order_id'=> '90435WEF932',
                'menu_name'=>'Kebab',
                'menu_type'=>'Main Course',
                'menu_dsc'=>'ohwhighoiphfophefihoefh',
                'qty'=> 2,
                'total_price'=>26000,
                'status'=> 2,
                'address_user_id'=> 2,
                'date'=>Carbon::now(),
            ],
            [
                'user_id'=>2,
                'order_id'=> '8887822663680FF',
                'menu_name'=>'Bakmie',
                'menu_type'=>'Main Course',
                'menu_dsc'=>'testesteshehe',
                'qty'=> 1,
                'total_price'=>13000,
                'status'=> 4,
                'address_user_id'=> 2,
                'date'=>Carbon::now(),
            ],
            [
                'user_id'=>2,
                'order_id'=> '8887822663680FF',
                'menu_name'=>'Es Krim',
                'menu_type'=>'Dessert',
                'menu_dsc'=>'aisaiasiaiafoef',
                'qty'=> 2,
                'total_price'=>10000,
                'status'=> 4,
                'address_user_id'=> 2,
                'date'=>Carbon::now(),
            ],
        ])->each(function ($order){
            DB::table('orders')->insert($order);
        });
    }
}
