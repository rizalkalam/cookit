<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class HowToCookSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        collect([
            [
                'menu_id'=> 1,
                'step_number'=> 1,
                'title_instruction'=>'coba',
                'instruction'=> 'Ukuran kotak tulisan mengikuti panjang tulisan',
                'image'=> 'img_menu/card1-sec2.png',
            ],
            [
                'menu_id'=> 1,
                'step_number'=> 2,
                'title_instruction'=>'coba lagi',
                'instruction'=> 'tESS TEEs',
                'image'=> 'img_menu/card1-sec2.png',
            ],
            [
                'menu_id'=> 1,
                'step_number'=> 3,
                'title_instruction'=>'ampe capek',
                'instruction'=> 'Trigger adalah sebuah program kecil dalam basis data yang secara otomatis berjalan ketika ada perubahan di tabel, Trigger adalah sebuah program kecil dalam basis data yang secara otomatis berjalan ketika ada perubahan di tabel Trigger adalah sebuah program kecil dalam basis data Trigger adalah sebuah program kecil dalam basis data',
                'image'=> 'img_menu/card1-sec2.png',
            ], 
        ])->each(function ($how_to_cook){
            DB::table('how_to_cooks')->insert($how_to_cook);
        });
    }
}
