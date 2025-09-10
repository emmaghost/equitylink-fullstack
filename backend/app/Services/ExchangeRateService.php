<?php

namespace App\Services;

use Illuminate\Support\Facades\Http;

class ExchangeRateService
{
    private string $token = "8e1bd74b8226948f553e7d2cbe3533b7334b92dc59ec31cf6bc2134475051d30";
    private string $baseUrl = "https://www.banxico.org.mx/SieAPIRest/service/v1";

    /**
     * Obtiene el tipo de cambio FIX USD/MXN desde Banxico.
     *
     * @param string $moneda
     * @return float
     * @throws \Exception
     */
    public function getTipoCambio(string $moneda = 'USD'): float
    {
        if ($moneda === 'MXN') {
            return 1.0; // no requiere tipo de cambio
        }

        $serie = "SF43718"; // Serie FIX dólar
        $url = "{$this->baseUrl}/series/{$serie}/datos/oportuno";

        $response = Http::withHeaders([
            "Bmx-Token" => $this->token,
            "Accept"    => "application/json",
        ])
        ->when(app()->environment('local'), fn($req) => $req->withoutVerifying())
        ->get($url);

        if (!$response->successful()) {
            throw new \Exception("Error consultando Banxico: {$response->status()}");
        }

        $data = $response->json();
        $dato = $data['bmx']['series'][0]['datos'][0]['dato'] ?? null;

        if (!$dato || !is_numeric($dato)) {
            throw new \Exception("No se pudo obtener tipo de cambio válido");
        }

        return (float) $dato;
    }
}
