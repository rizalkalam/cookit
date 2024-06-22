<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class AddressDetailSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        collect([
            [
                'area' => 'Surabaya Kota'
            ],

            [
                'area' => 'Surabaya Pusat'
            ],

            [
                'area' => 'Surabaya Timur'
            ],
        ])->each(function ($address_detail){
            DB::table('address_details')->insert($address_detail);
        });
    }
}
