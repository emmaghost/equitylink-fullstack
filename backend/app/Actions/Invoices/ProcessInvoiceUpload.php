<?php

namespace App\Actions\Invoices;

use App\Models\Invoice;
use App\Services\ExchangeRateService;
use Illuminate\Http\UploadedFile;


/**
 * Action para procesar la carga de facturas XML.
 * 
 * Flujo:
 * 1. Recibe archivo XML (UploadedFile)
 * 2. Parsea atributos clave (UUID, Folio, Emisor, Receptor, Moneda, Total)
 * 3. Consulta tipo de cambio con ExchangeRateService
 * 4. Persiste en DB como Invoice
 */
class ProcessInvoiceUpload
{
    public function __construct(
        private ExchangeRateService $exchangeRateService
    ) {}

    public function handle(UploadedFile $file): Invoice
    {
        $xmlContent = file_get_contents($file->getRealPath());
        $xml = simplexml_load_string($xmlContent);

        if (!$xml) {
            throw new \Exception('XML inválido');
        }

        $uuid     = (string) ($xml->attributes()['UUID'] ?? $xml->UUID) ?: uniqid();
        $folio    = (string) ($xml->attributes()['Folio'] ?? $xml->Folio) ?: substr($uuid, -6);
        $emisor   = isset($xml->Emisor['Nombre']) ? (string) $xml->Emisor['Nombre'] : 'Desconocido';
        $receptor = isset($xml->Receptor['Nombre']) ? (string) $xml->Receptor['Nombre'] : 'Desconocido';
        $moneda   = (string) ($xml->attributes()['Moneda'] ?? '') ?: 'MXN';
        $total    = (float) ($xml->attributes()['Total'] ?? 0);


        $tipoCambio = $this->exchangeRateService->getTipoCambio();

        return Invoice::create([
            'uuid'        => $uuid,
            'folio'       => $folio,
            'emisor'      => $emisor,
            'receptor'    => $receptor,
            'moneda'      => $moneda,
            'total'       => $total,
            'tipo_cambio' => $tipoCambio,
        ]);
    }
}
