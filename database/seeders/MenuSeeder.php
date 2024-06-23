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
                'type'=>'Burger Arena',
                'profile_yt'=>'testing',
                'link_yt'=>'ou5a0DkiN10?si=auK-v0z28sZVH9W7',
                'img_menu'=> '/img_menu/card1-sec2.png',
                'flavor_id'=>1
            ],
        ])->each(function ($menu){
            DB::table('menus')->insert($menu);
        });
    }
}
