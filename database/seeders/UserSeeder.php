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
            'phone' => '0000000000',
            'email' => 'admin@example.com',
            'password' => bcrypt('password'),
        ]);

        $user = User::create([
            'full_name' => 'user1',
            'name' => 'new_user1',
            'phone' => '085155370503',
            'email' => 'user1@example.com',
            'password' => bcrypt('user123'),
            'photo_profile' => 'assets/gyj.jpeg'
        ]);

        $admin->assignRole('admin');
        $user->assignRole('user');
    }
}
