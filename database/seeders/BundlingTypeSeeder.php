<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class BundlingTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        collect([
            // snack attack
            [
                'name_type' => 'Bundling Appetizer',
                'bundling_id'=> 1,
                'menu_id' => 1,
                'qty' => 3,
                'status_bundling'=> 2,
            ],
            [
                'name_type' => 'Bundling Maincourse',
                'bundling_id'=> 1,
                'menu_id' => 3,
                'qty' => 2,
                'status_bundling'=> 2,
            ],
            [
                'name_type' => 'Bundling Dessert',
                'bundling_id'=> 1,
                'menu_id' => 4,
                'qty' => 3,
                'status_bundling'=> 2,
            ],
            [
                'name_type' => 'Bundling Appetizer',
                'bundling_id'=> 1,
                'menu_id' => 2,
                'qty' => 1,
                'status_bundling'=> 2,
            ],
            // snack attack

            // cook the day
            [
                'name_type' => 'Bundling Appetizer',
                'bundling_id'=> 2,
                'menu_id' => 2,
                'qty' => 10,
                'status_bundling'=> 2,
            ],
            [
                'name_type' => 'Bundling Maincourse',
                'bundling_id'=> 2,
                'menu_id' => 3,
                'qty' => 2,
                'status_bundling'=> 2,
            ],
            [
                'name_type' => 'Bundling Dessert',
                'bundling_id'=> 2,
                'menu_id' => 4,
                'qty' => 3,
                'status_bundling'=> 2,
            ],
            [
                'name_type' => 'Bundling Appetizer',
                'bundling_id'=> 2,
                'menu_id' => 1,
                'qty' => 0,
                'status_bundling'=> 2,
            ],
            // cook the day

            // cook it once
            [
                'name_type' => 'Bundling Appetizer',
                'bundling_id'=> 3,
                'menu_id' => 1,
                'qty' => 3,
                'status_bundling'=> 2,
            ],
            [
                'name_type' => 'Bundling Maincourse',
                'bundling_id'=> 3,
                'menu_id' => 3,
                'qty' => 2,
                'status_bundling'=> 2,
            ],
            [
                'name_type' => 'Bundling Dessert',
                'bundling_id'=> 3,
                'menu_id' => 4,
                'qty' => 3,
                'status_bundling'=> 2,
            ],
            [
                'name_type' => 'Bundling Appetizer',
                'bundling_id'=> 3,
                'menu_id' => 2,
                'qty' => 0,
                'status_bundling'=> 2,
            ],
            // cook it once

            // adorable week
            [
                'name_type' => 'Bundling Appetizer',
                'bundling_id'=> 4,
                'menu_id' => 1,
                'qty' => 3,
                'status_bundling'=> 2,
            ],
            [
                'name_type' => 'Bundling Maincourse',
                'bundling_id'=> 4,
                'menu_id' => 3,
                'qty' => 2,
                'status_bundling'=> 2,
            ],
            [
                'name_type' => 'Bundling Dessert',
                'bundling_id'=> 4,
                'menu_id' => 4,
                'qty' => 3,
                'status_bundling'=> 2,
            ],
            [
                'name_type' => 'Bundling Appetizer',
                'bundling_id'=> 4,
                'menu_id' => 2,
                'qty' => 0,
                'status_bundling'=> 2,
            ],
            // adorable week
        ])->each(function ($bundling_type){
            DB::table('bundling_types')->insert($bundling_type);
        });
    }
}
