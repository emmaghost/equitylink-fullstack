<?php

namespace Tests\Feature;

use App\Actions\Invoices\ProcessInvoiceUpload;
use App\Models\Invoice;
use App\Models\User;
use Illuminate\Http\UploadedFile;
use Spatie\Permission\Models\Permission;
use Tests\TestCase;

class InvoiceUploadTest extends TestCase
{
    public function test_upload_invoice_saves_with_exchange_rate(): void
    {
        // Mock servicio de tipo de cambio
        $this->mock(\App\Services\ExchangeRateService::class, function ($mock) {
            $mock->shouldReceive('getTipoCambio')->andReturn(18.75);
        });

        // Mock de la acción que procesa XML
        $fakeInvoice = new Invoice([
            'folio'       => 'F001',
            'moneda'      => 'MXN',
            'total'       => 123.45,
            'tipo_cambio' => 18.75,
        ]);

        $this->mock(ProcessInvoiceUpload::class, function ($mock) use ($fakeInvoice) {
            $mock->shouldReceive('handle')->andReturn($fakeInvoice);
        });

        // Usuario con permiso
        $user = User::create([
            'name' => 'Test User',
            'email' => 'test@example.com',
            'password' => bcrypt('password'),
        ]);
        Permission::firstOrCreate(['name' => 'upload-invoices']);
        $user->givePermissionTo('upload-invoices');
        $this->actingAs($user, 'sanctum');

        // Archivo XML fake (contenido no importa, ya está mockeado)
        $file = UploadedFile::fake()->create('factura.xml', 1, 'application/xml');

        // Request
        $response = $this->postJson('/api/invoices/upload', [
            'xml' => $file,
        ]);

        $response->assertStatus(201)
                ->assertJsonPath('data.folio', 'F001')
                ->assertJsonPath('data.moneda', 'MXN');
    } 
   public function test_upload_invoice_fails_with_invalid_xml(): void
    {
        $this->mock(\App\Services\ExchangeRateService::class, function ($mock) {
            $mock->shouldReceive('getTipoCambio')->andReturn(18.75);
        });

        $user = User::factory()->create();
        Permission::firstOrCreate(['name' => 'upload-invoices']);
        $user->givePermissionTo('upload-invoices');
        $this->actingAs($user, 'sanctum');

        // XML inválido
        $file = UploadedFile::fake()->createWithContent(
            'factura.xml',
            '<INVALID></xml>'
        );

        $response = $this->postJson('/api/invoices/upload', [
            'xml' => $file,
        ]);

        $response->assertStatus(422);
    }

   
  
}
