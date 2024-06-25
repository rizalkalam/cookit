<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class MenuSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        collect([
            [
                'name'=>'Cheese Burger',
                'description'=>'tes1233',
                'profile_yt'=>'testing',
                'link_yt'=>'ou5a0DkiN10?si=auK-v0z28sZVH9W7',
                'img_menu'=> 'assets/img-default.png',
                'flavor_id'=>1,
                'price'=>13000,
                'type_id'=>1
            ],
            [
                'name'=>'Kebab',
                'description'=>'tes1233',
                'profile_yt'=>'testing',
                'link_yt'=>'ou5a0DkiN10?si=auK-v0z28sZVH9W7',
                'img_menu'=> 'assets/img-default.png',
                'flavor_id'=>1,
                'price'=>13000,
                'type_id'=>2
            ],
            [
                'name'=>'Bakmie',
                'description'=>'tes1233',
                'profile_yt'=>'testing',
                'link_yt'=>'ou5a0DkiN10?si=auK-v0z28sZVH9W7',
                'img_menu'=> 'assets/img-default.png',
                'flavor_id'=>1,
                'price'=>13000,
                'type_id'=>3
            ],
            [
                'name'=>'Nasgor',
                'description'=>'tes1233',
                'profile_yt'=>'testing',
                'link_yt'=>'ou5a0DkiN10?si=auK-v0z28sZVH9W7',
                'img_menu'=> 'assets/img-default.png',
                'flavor_id'=>1,
                'price'=>13000,
                'type_id'=>2
            ],
            [
                'name'=>'Ayam Suwir',
                'description'=>'tes1233',
                'profile_yt'=>'testing',
                'link_yt'=>'ou5a0DkiN10?si=auK-v0z28sZVH9W7',
                'img_menu'=> 'assets/img-default.png',
                'flavor_id'=>2,
                'price'=>13300,
                'type_id'=>1
            ],
        ])->each(function ($menu){
            DB::table('menus')->insert($menu);
        });
    }
}
