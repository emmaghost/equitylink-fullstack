<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class UserSeeder extends Seeder {
    public function run(): void {
        // Aseguramos que existan roles
        $adminRole = Role::firstOrCreate(['name' => 'admin']);
        $userRole  = Role::firstOrCreate(['name' => 'user']);

        // Aseguramos que existan permisos
        $permissions = [
            'view-invoices',
            'upload-invoices',
            'view-users',
            'create-users',
            'assign-permissions',
        ];

        foreach ($permissions as $perm) {
            Permission::firstOrCreate(['name' => $perm]);
        }

        // Crear Admin
        $admin = User::firstOrCreate(
            ['email' => 'admin@demo.com'],
            ['name' => 'Admin', 'password' => Hash::make('password')]
        );
        $admin->assignRole($adminRole);
        $admin->syncPermissions($permissions);

        // Crear usuario normal
        $user = User::firstOrCreate(
            ['email' => 'user@demo.com'],
            ['name' => 'User Demo', 'password' => Hash::make('password')]
        );
        $user->assignRole($userRole);
        $user->syncPermissions(['view-invoices']);
    }
}
