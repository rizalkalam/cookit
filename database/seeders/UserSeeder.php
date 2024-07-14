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
            'name' => 'cookitadmin',
            'phone' => '6289697166633', //nomor target
            'email' => 'cookitadmin@cookit.com',
            'password' => bcrypt('cookitadmin8989'),
            'address_id' => 1,
        ]);

        $user = User::create([
            'full_name' => 'User Testing',
            'name' => 'testing',
            'phone' => '085155370503',
            'email' => 'usertesting@cookit.com',
            'password' => bcrypt('password123'),
            'photo_profile' => 'assets/img-default.png',
            'address_id' => 2,
        ]);

        $admin->assignRole('admin');
        $user->assignRole('user');
    }
}
