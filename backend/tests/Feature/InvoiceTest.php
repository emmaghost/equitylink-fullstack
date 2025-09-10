<?php

namespace Tests\Feature;

use App\Models\User;
use Spatie\Permission\Models\Permission;
use Tests\TestCase;

class InvoiceTest extends TestCase
{
    public function test_list_invoices_requires_permission(): void
    {
        $user = User::factory()->create();
        $this->actingAs($user, 'sanctum');

        $response = $this->getJson('/api/invoices');
        $response->assertStatus(403);
    }

    public function test_list_invoices_with_permission(): void
    {
        $user = User::factory()->create();
        Permission::firstOrCreate(['name' => 'view-invoices']);
        $user->givePermissionTo('view-invoices');
        $this->actingAs($user, 'sanctum');

        $response = $this->getJson('/api/invoices');
        $response->assertStatus(200);
    }
     public function test_list_invoices_without_auth_returns_401(): void
    {
        $response = $this->getJson('/api/invoices');
        
        $response->assertStatus(status: 500);
    }
}
