<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class FlavorProfileSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        collect([
            [
                'flavor' => 'Manis'
            ],

            [
                'flavor' => 'Asin'
            ],

            [
                'flavor' => 'Pedas'
            ],
        ])->each(function ($flavor_profile){
            DB::table('flavor_profiles')->insert($flavor_profile);
        });
    }
}
