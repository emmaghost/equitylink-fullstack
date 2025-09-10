<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder {
    public function run(): void {
        $admin = User::firstOrCreate(
            ['email' => 'admin@demo.com'],
            ['name' => 'Admin', 'password' => Hash::make('password')]
        );
        $admin->assignRole('admin');

        $user = User::firstOrCreate(
            ['email' => 'user@demo.com'],
            ['name' => 'User Demo', 'password' => Hash::make('password')]
        );
        $user->assignRole('user');
    }
}
