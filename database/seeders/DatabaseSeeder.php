<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $superadmin = [
            'name' => 'Superadmin',
            'email' => 'superadmin@mail.com',
            'email_verified_at' => now(),
            'password' => bcrypt('superadmin123'),
            'role' => 'superadmin'
        ];
        $admin = [
            'name' => 'Admin',
            'email' => 'admin@mail.com',
            'email_verified_at' => now(),
            'password' => bcrypt('admin123'),
            'role' => 'admin'
        ];
        $user = [
            'name' => 'User',
            'email' => 'user@mail.com',
            'email_verified_at' => now(),
            'password' => bcrypt('user123'),
            'role' => 'user'
        ];

        User::create($superadmin);
        User::create($admin);
        User::create($user);
    }
}
