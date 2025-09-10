<?php

namespace Tests\Feature;

use App\Models\User;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use Tests\TestCase;

class UserTest extends TestCase
{
    use DatabaseMigrations;

    public function test_creates_a_new_user(): void
    {
        // Crear rol y permisos necesarios
        Role::firstOrCreate(['name' => 'admin']);
        Permission::firstOrCreate(['name' => 'view-invoices']);
        Permission::firstOrCreate(['name' => 'create-users']);

        // Crear un admin y autenticarlo
        $admin = User::factory()->create();
        $admin->assignRole('admin');
        $admin->givePermissionTo('create-users');

        $this->actingAs($admin, 'sanctum');

        // Llamar a la API
        $response = $this->postJson('/api/users', [
            'name' => 'Test User',
            'email' => 'test@example.com',
            'password' => 'password',
            'role' => 'admin',
        ]);


        $response->assertStatus(201)
            ->assertJsonStructure([
                'status',
                'message',
                'data' => ['id', 'name', 'email'],
            ]);

        $this->assertDatabaseHas('users', [
            'email' => 'test@example.com',
        ]);
    }

    public function test_list_users_with_permission(): void
    {
        $user = User::factory()->create();
        Permission::firstOrCreate(['name' => 'view-users']);
        $user->givePermissionTo('view-users');
        $this->actingAs($user, 'sanctum');

        $response = $this->getJson('/api/users');
        $response->assertStatus(200);
    }

    public function test_list_users_without_permission(): void
    {
        $user = User::factory()->create();
        $this->actingAs($user, 'sanctum');

        $response = $this->getJson('/api/users');
        $response->assertStatus(403);
    }

    public function test_create_user_without_permission_returns_403(): void
    {
        $user = User::factory()->create();
        $this->actingAs($user, 'sanctum');

        $response = $this->postJson('/api/users', [
            'name' => 'Unauthorized User',
            'email' => 'unauth@example.com',
            'password' => 'password',
        ]);

        $response->assertStatus(403);
    }
}
