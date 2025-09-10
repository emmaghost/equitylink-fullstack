<?php

namespace Tests\Unit;

use App\Models\User;
use App\Services\ExchangeRateService;
use Illuminate\Support\Facades\Http;
use Tests\TestCase;
use Spatie\Permission\Models\Permission;
use Illuminate\Http\UploadedFile;



class ExchangeRateServiceTest extends TestCase
{
   public function test_get_tipo_cambio_returns_float(): void
    {
        Http::fake([
            'www.dof.gob.mx/*' => Http::response('<html>18.50</html>', 200),
        ]);

        $service = new ExchangeRateService();
        $tipoCambio = $service->getTipoCambio();
        $this->assertEqualsWithDelta(18.50, $tipoCambio, 0.001);
    }

    public function test_get_tipo_cambio_fails(): void
    {
        Http::fake([
            'www.dof.gob.mx/*' => Http::response(null, 500),
        ]);

        $this->expectException(\Exception::class);

        $service = new ExchangeRateService();
        $service->getTipoCambio();
    }

    // Extra: timeout también lanza excepción
    public function test_get_tipo_cambio_handles_network_timeout(): void
    {
        Http::fake([
            'www.dof.gob.mx/*' => Http::response(null, 408),
        ]);

        $this->expectException(\Exception::class);

        $service = new ExchangeRateService();
        $service->getTipoCambio();
    }
    public function test_invoice_upload_uses_exchange_rate_service(): void
    {
        $this->mock(\App\Services\ExchangeRateService::class, function ($mock) {
            $mock->shouldReceive('getTipoCambio')->andReturn(20.50);
        });

        $user = User::factory()->create();
        Permission::firstOrCreate(['name' => 'upload-invoices']);
        $user->givePermissionTo('upload-invoices');
        $this->actingAs($user, 'sanctum');

        $file = UploadedFile::fake()->createWithContent(
            'factura.xml',
            <<<XML
    <Comprobante UUID="X123" Folio="F100" Moneda="MXN" Total="500.00">
        <Emisor Nombre="Empresa SA de CV"/>
        <Receptor Nombre="Cliente SA de CV"/>
    </Comprobante>
    XML
        );

        $this->postJson('/api/invoices/upload', ['xml' => $file])
            ->assertStatus(201);

        $this->assertDatabaseHas('invoices', [
            'folio' => 'F100',
            'tipo_cambio' => 20.50,
        ]);
    }
    
}
