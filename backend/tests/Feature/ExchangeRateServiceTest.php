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
            '*' => Http::response([
                'bmx' => [
                    'series' => [
                        [
                            'datos' => [
                                ['dato' => '18.50']
                            ]
                        ]
                    ]
                ]
            ], 200),
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
   
    
}
