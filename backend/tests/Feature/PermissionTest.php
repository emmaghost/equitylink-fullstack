<?php

namespace Tests\Feature;

use App\Models\User;
use Spatie\Permission\Models\Permission;
use Tests\TestCase;

class PermissionTest extends TestCase
{
    public function test_list_permissions_requires_permission(): void
    {
        $user = User::factory()->create();
        $this->actingAs($user, 'sanctum');

        $response = $this->getJson('/api/permissions');
        $response->assertStatus(403);
    }

    public function test_list_permissions_with_permission(): void
    {
        $user = User::factory()->create();
        Permission::firstOrCreate(['name' => 'view-users']);
        $user->givePermissionTo('view-users');
        $this->actingAs($user, 'sanctum');

        $response = $this->getJson('/api/permissions');
        $response->assertStatus(200);
    }
    public function test_create_permission_with_permission(): void
    {
        $admin = User::factory()->create();
        Permission::firstOrCreate(['name' => 'assign-permissions']);
        $admin->givePermissionTo('assign-permissions');
        $this->actingAs($admin, 'sanctum');

        $response = $this->postJson('/api/permissions', [
            'name' => 'new-permission',
        ]);

        $response->assertStatus(201);
        $this->assertDatabaseHas('permissions', ['name' => 'new-permission']);
    }
}
