<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class MaterialSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        collect([
            [
                'material_img' => '/img_menu/card1-sec2.png',
                'material_name' => 'Ragi Instan'
            ],

            [
                'material_img' => '/img_menu/card1-sec2.png',
                'material_name' => 'Bayam'
            ],

            [
                'material_img' => '/img_menu/card1-sec2.png',
                'material_name' => 'Susu Evaporasi'
            ],
        ])->each(function ($material_sent){
            DB::table('material_sents')->insert($material_sent);
        });
    }
}
