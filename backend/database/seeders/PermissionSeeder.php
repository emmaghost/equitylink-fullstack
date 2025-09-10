<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class PermissionSeeder extends Seeder
{
    public function run(): void
    {
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

        $admin = Role::firstOrCreate(['name' => 'admin']);
        $admin->givePermissionTo($permissions);

        $user = Role::firstOrCreate(['name' => 'user']);
        $user->givePermissionTo(['view-invoices']);
    }
}
