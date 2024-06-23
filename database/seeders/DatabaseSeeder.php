<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Database\Seeders\MenuSeeder;
use Database\Seeders\UnitSeeder;
use Database\Seeders\UserSeeder;
use Database\Seeders\ToSentSeeder;
use Database\Seeders\DistrictSeeder;
use Database\Seeders\MaterialSeeder;
use Database\Seeders\HowToCookSeeder;
use Database\Seeders\WeeklyMenuSeeder;
use Database\Seeders\AddressUserSeeder;
use Database\Seeders\LiveProductSeeder;
use Database\Seeders\AddressDetailSeeder;
use Database\Seeders\FlavorProfileSeeder;
use Database\Seeders\TutorialsMenuSeeder;
use Database\Seeders\NutritionsMenuSeeder;
use Database\Seeders\OtherInformationsMenuSeeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        $this->call([
            UserSeeder::class,
            LiveProductSeeder::class,
            MenuSeeder::class,
            NutritionsMenuSeeder::class,
            HowToCookSeeder::class,
            ToSentSeeder::class,
            WeeklyMenuSeeder::class,
            FlavorProfileSeeder::class,
            MaterialSeeder::class,
            UnitSeeder::class,
            AddressDetailSeeder::class,
            DistrictSeeder::class,
            AddressUserSeeder::class,
        ]);
    }
}
