<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class OtherInformationsMenuSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        collect([
            [
                'menu_id'=> 1,
                'material_sent_1'=> 'Ragi instan',
                'material_sent_2'=> 'Ragi instan',
                'material_sent_3'=> 'Ragi instan',
                'material_sent_4'=> 'Ragi instan',
                'material_sent_5'=> 'Ragi instan',
                'material_sent_6'=> 'Ragi instan',
                'material_sent_7'=> 'Ragi instan',
                'material_sent_8'=> 'Ragi instan',
                'qty_sent'=> 1,
                'unit_sent'=> 'sdt',
            ],
        ])->each(function ($other_informations_menu){
            DB::table('other_informations_menus')->insert($other_informations_menu);
        });
    }
}
