<?php

namespace Database\Seeders;

use Illuminate\Support\Carbon;
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
                'name'=>'Nasgor',
                'description'=>'tes1233',
                'profile_yt'=>'testing',
                'link_yt'=>'https://www.youtube.com/watch?v=NyUTYwZe_l4',
                'img_menu'=> 'assets/card3.png',
                'flavor_id'=>1,
                'price'=>13000,
                'type_id'=>1,
                'created_at'=>Carbon::now(),
                'updated_at'=>Carbon::now(),
            ],
            [
                'name'=>'Kebab',
                'description'=>'tes1233',
                'profile_yt'=>'testing',
                'link_yt'=>'https://www.youtube.com/watch?v=e1hik_dBuOA&pp=ygUNZ3JhY2llIGFicmFtcw%3D%3D',
                'img_menu'=> 'assets/card3.png',
                'flavor_id'=>1,
                'price'=>13000,
                'type_id'=>1,
                'created_at'=>Carbon::now(),
                'updated_at'=>Carbon::now(),
            ],
            [
                'name'=>'Bakmie',
                'description'=>'tes1233',
                'profile_yt'=>'testing',
                'link_yt'=>'https://www.youtube.com/watch?v=7IcYAGAm6P8&pp=ygUNZ3JhY2llIGFicmFtcw%3D%3D',
                'img_menu'=> 'assets/card3.png',
                'flavor_id'=>1,
                'price'=>13000,
                'type_id'=>2,
                'created_at'=>Carbon::now(),
                'updated_at'=>Carbon::now(),
            ],
            [
                'name'=>'Risol Mayo',
                'description'=>'tes1233',
                'profile_yt'=>'testing',
                'link_yt'=>'https://www.youtube.com/watch?v=7IcYAGAm6P8&pp=ygUNZ3JhY2llIGFicmFtcw%3D%3D',
                'img_menu'=> 'assets/card3.png',
                'flavor_id'=>1,
                'price'=>13000,
                'type_id'=>3,
                'created_at'=>Carbon::now(),
                'updated_at'=>Carbon::now(),
            ],
        ])->each(function ($menu){
            DB::table('menus')->insert($menu);
        });
    }
}
