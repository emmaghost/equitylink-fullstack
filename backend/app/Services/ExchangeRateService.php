<?php

namespace App\Services;

use Illuminate\Support\Facades\Http;


/**
 * Service encargado de consultar el tipo de cambio actual en el DOF.
 * 
 * Responsabilidad única:
 * - Consumir el endpoint del DOF
 * - Parsear la respuesta y devolver un float
 * 
 * Se inyecta en Actions como ProcessInvoiceUpload.
 */

class ExchangeRateService
{
    /**
     * Obtiene el tipo de cambio del día desde el DOF.
     *
     * @return float
     * @throws \Exception
     */
    public function getTipoCambio(): float
    {
        try {
            //  Endpoint real del DOF
            $url = "https://www.dof.gob.mx/indicadores_detalle.php?cod_tipo_indicador=158";

            $response = Http::get($url);

            if (!$response->successful()) {
                throw new \Exception('No se pudo obtener tipo de cambio del DOF');
            }

            // El DOF devuelve HTML, habría que parsearlo.
            // Para simplificar, asumimos que logras extraer el número.
            // Aquí solo pongo un valor simulado.
            return 18.50;
        } catch (\Throwable $e) {
            // En caso de error, puedes decidir devolver un fallback
            throw new \Exception('Error consultando DOF: ' . $e->getMessage());
        }
    }
}
