<?php

namespace Database\Seeders;

use Faker\Factory;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class PaymentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        collect([
            [
                'order_id'=>'OR13332638GFH',
                'status'=>'pending',
                'customer_first_name'=>'kalma',
                'customer_email'=>'rizalkalam@gmail.com',
                'customer_address'=> 'Jalan Kejawan Putih Mutiara VI Blok c3 No.333A, Kejawen Putih Tambak, Mulyorejo (pagar ke2 stlh belok), KOTA SURABAYA - MULYOREJO, JAWA TIMUR, ID 60112',
            ],
        ])->each(function ($payment){
            DB::table('payments')->insert($payment);
        });
    }
}
