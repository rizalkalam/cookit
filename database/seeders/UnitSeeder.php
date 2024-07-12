<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class UnitSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        collect([
            [
                'unit' => 'Sdt'
            ],

            [
                'unit' => 'Bks'
            ],

            [
                'unit' => 'Helai'
            ],
        ])->each(function ($unit){
            DB::table('units')->insert($unit);
        });
    }
}
