<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $adminRole = Role::create(['name' => 'admin']);
        $userRole = Role::create(['name' => 'user']);

        $admin = User::create([
            'full_name' => 'Admin User',
            'name' => 'admin',
            'phone' => '085155370503',
            'email' => 'admin@example.com',
            'password' => bcrypt('password'),
            'address_id' => null,
        ]);

        $user = User::create([
            'full_name' => 'Calvin Winata',
            'name' => 'cwskie',
            'phone' => '085155370503',
            'email' => 'cwskie1@example.com',
            'password' => bcrypt('password123'),
            'photo_profile' => 'assets/img-default.png',
            'address_id' => 1,
        ]);

        $admin->assignRole('admin');
        $user->assignRole('user');
    }
}
