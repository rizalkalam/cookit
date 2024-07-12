<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class WeeklyMenuSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        collect([
            [
                'menu_name'=>'Cheese Burger',
                'store'=>'Burger Arena',
                'price'=>'388',
                'img_menu'=>'/img_menu/card1-sec2.png',
            ],

            [
                'menu_name'=>"Toffe's Cake",
                'store'=>'Top Sticks',
                'price'=>'388',
                'img_menu'=>'/img_menu/card2-sec2.png',
            ],

            [
                'menu_name'=>'Dancake',
                'store'=>'Cake World',
                'price'=>'388',
                'img_menu'=>'img_menu/card3-sec2.png',
            ],

            [
                'menu_name'=>'Crispy Sandwitch',
                'store'=>'Fastfood Dine',
                'price'=>'388',
                'img_menu'=>'img_menu/card4-sec2.png',
            ],

            [
                'menu_name'=>'Thai Soup',
                'store'=>'Foody man',
                'price'=>'388',
                'img_menu'=>'img_menu/card5-sec2.png',
            ],

            [
                'menu_name'=>'Crispy Sandwitch',
                'store'=>'Fastfood Dine',
                'price'=>'388',
                'img_menu'=>'img_menu/card4-sec2.png',
            ],

            [
                'menu_name'=>'Thai Soup',
                'store'=>'Foody man',
                'price'=>'2300000',
                'img_menu'=>'img_menu/card5-sec2.png',
            ],
        ])->each(function ($weekly_menu){
            DB::table('weekly_menus')->insert($weekly_menu);
        });
    }
}
