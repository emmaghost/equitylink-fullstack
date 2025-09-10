<?php

namespace Tests\Feature;

use App\Models\User;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Tests\TestCase;

class AuthTest extends TestCase
{
    use DatabaseMigrations;

    public function test_registers_a_user(): void
    {
        $response = $this->postJson('/api/register', [
            'name' => 'New User',
            'email' => 'new@example.com',
            'password' => 'password',
            'password_confirmation' => 'password',
        ]);

        $response->assertStatus(201)
            ->assertJsonStructure([
                'status',
                'message',
                'data' => ['user', 'token'],
            ]);

        $this->assertDatabaseHas('users', [
            'email' => 'new@example.com',
        ]);
    }

    public function test_logs_in_a_user_with_correct_credentials(): void
    {
        $user = User::factory()->create([
            'password' => bcrypt('password'),
        ]);

        $response = $this->postJson('/api/login', [
            'email' => $user->email,
            'password' => 'password',
        ]);

        $response->assertStatus(200)
            ->assertJsonStructure([
                'status',
                'message',
                'data' => ['user', 'token'],
            ]);
    }

    public function test_rejects_login_with_wrong_password(): void
    {
        $user = User::factory()->create([
            'password' => bcrypt('password'),
        ]);

        $response = $this->postJson('/api/login', [
            'email' => $user->email,
            'password' => 'wrong-password',
        ]);

        $response->assertStatus(401);
    }

    public function test_me_endpoint_returns_authenticated_user(): void
    {
        $user = User::factory()->create();
        $this->actingAs($user, 'sanctum');

        $response = $this->getJson('/api/me');
        $response->assertStatus(200)
            ->assertJson([
                'id' => $user->id,
                'email' => $user->email,
            ]);
    }

    public function test_logout_invalidates_token(): void
    {
        $user = User::factory()->create([
            'password' => bcrypt('password'),
        ]);

        // Login para obtener token
        $login = $this->postJson('/api/login', [
            'email' => $user->email,
            'password' => 'password',
        ]);

        $token = $login->json('data.token');

        // Llamar logout con token
        $response = $this->withHeader('Authorization', "Bearer $token")
            ->postJson('/api/logout');

        $response->assertStatus(200);
    }
}
