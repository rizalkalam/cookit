<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class BundlingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        collect([
            [
                'bundling_name' => 'Snack Attack',
                'price' => 0,
            ],
            [
                'bundling_name' => 'Cook The Day',
                'price' => 0,
            ],
            [
                'bundling_name' => 'Cook It Once',
                'price' => 0,
            ],
            [
                'bundling_name' => 'Adorable Week',
                'price' => 0,
            ],
        ])->each(function ($bundling){
            DB::table('bundlings')->insert($bundling);
        });
    }
}
