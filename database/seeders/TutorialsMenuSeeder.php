<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class TutorialsMenuSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        collect([
            [
                'menu_id'=> 1,
                'tutorial_1'=> 'Ukuran kotak tulisan mengikuti panjang tulisan',
                'tutorial_2'=> 'Tesss',
                'tutorial_3'=> 'Trigger adalah sebuah program kecil dalam basis data yang secara otomatis berjalan ketika ada perubahan di tabel, ',
                'tutorial_4'=> 'Trigger adalah sebuah program kecil dalam basis data yang secara otomatis berjalan ketika ada perubahan di tabel, seperti menambah, mengubah, atau menghapus data. rigger adalah sebuah program kecil dalam basis data yang secara otomatis berjalan ketika ada perubahan di tabel, seperti menambah, mengubah, atau menghapus data.',
                'tutorial_5'=> 'Trigger adalah sebuah program kecil dalam basis data yang secara otomatis berjalan ketika ada perubahan di tabel, seperti menambah, mengubah, atau menghapus data.',
                'img_tutorial_1'=> '/assets/3.jpg',
                'img_tutorial_2'=> '/assets/gyj.png',
                'img_tutorial_3'=> '/assets/3.jpg',
                'img_tutorial_4'=> '/assets/gyj.png',
                'img_tutorial_5'=> '/assets/3.jpg',
            ],
        ])->each(function ($tutorials_menu){
            DB::table('tutorials_menus')->insert($tutorials_menu);
        });
    }
}
