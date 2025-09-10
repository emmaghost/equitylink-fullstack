<?php

namespace Tests\Feature;

use App\Models\User;
use Illuminate\Http\UploadedFile;
use Spatie\Permission\Models\Permission;
use Tests\TestCase;

class InvoiceUploadTest extends TestCase
{
    public function test_upload_invoice_saves_with_exchange_rate(): void
    {
        // Mock servicio
        $this->mock(\App\Services\ExchangeRateService::class, function ($mock) {
            $mock->shouldReceive('getTipoCambio')->andReturn(18.75);
        });

        // Usuario con permiso
        $user = User::factory()->create();
        Permission::firstOrCreate(['name' => 'upload-invoices']);
        $user->givePermissionTo('upload-invoices');
        $this->actingAs($user, 'sanctum');

        // Archivo XML válido fake
        $file = UploadedFile::fake()->createWithContent(
            'factura.xml',
            <<<XML
                        <Comprobante UUID="1234567890" Folio="F001" Moneda="MXN" Total="123.45">
                            <Emisor Nombre="Empresa SA de CV"/>
                            <Receptor Nombre="Cliente SA de CV"/>
                        </Comprobante>
                        XML
                                );

        // Request
       $response = $this->postJson('/api/invoices/upload', [
            'xml' => $file, 
        ]);

        $response->assertStatus(201);

        $this->assertDatabaseHas('invoices', [
            'folio' => 'F001',
            'moneda' => 'MXN',
            'total' => 123.45,
            'tipo_cambio' => 18.75,
        ]);
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
