<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class AddressUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        collect([
            [
                'user_id' => 1,
                'full_name' => 'Admin',
                'phone_address' => '85177770503',
                'area_id' => 1,
                'district_id' => '1',
                'complete_address' => 'Jl. semin-cawas',
            ],

            [
                'user_id' => 2,
                'full_name' => 'Bae Suzy',
                'phone_address' => '85177770503',
                'area_id' => 1,
                'district_id' => '1',
                'complete_address' => 'Jalan Kejawan Putih Mutiara VI Blok c3 No.333A, Kejawen Putih Tambak, Mulyorejo (pagar ke2 stlh belok), KOTA SURABAYA - MULYOREJO, JAWA TIMUR, ID 60112',
            ],

            [
                'user_id' => 2,
                'full_name' => 'Sarah Melati',
                'phone_address' => '85190050718',
                'area_id' => 1,
                'district_id' => '2',
                'complete_address' => 'Jl. Tarumanegara No.3, Banyuanyar, Kec. Banjarsari, Kota Surakarta, Jawa Tengah 57137',
            ],

            [
                'user_id' => 2,
                'full_name' => 'Kamal',
                'phone_address' => '85155370503',
                'area_id' => 1,
                'district_id' => '3',
                'complete_address' => 'Jalan Sukun Raya No.09, Besito Kulon, Besito, Kec. Gebog, Kabupaten Kudus, Jawa Tengah 59333',
            ],
        ])->each(function ($address_user){
            DB::table('address_users')->insert($address_user);
        });
    }
}
