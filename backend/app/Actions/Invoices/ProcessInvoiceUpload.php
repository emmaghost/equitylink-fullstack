<?php

namespace App\Actions\Invoices;

use App\Models\Invoice;
use App\Services\ExchangeRateService;
use Illuminate\Http\UploadedFile;

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
            throw new \Exception('El archivo XML está mal formado.');
        }

        // Registrar namespaces si existen
        $namespaces = $xml->getNamespaces(true);
        foreach ($namespaces as $prefix => $uri) {
            $xml->registerXPathNamespace($prefix, $uri);
        }

        // -----------------------------
        // UUID
        // -----------------------------
        $uuid = '';

        // Caso 1: CFDI con TimbreFiscalDigital
        if (isset($namespaces['tfd'])) {
            $uuid = (string) ($xml->xpath('//tfd:TimbreFiscalDigital/@UUID')[0] ?? '');
        }

        // Caso 2: XML sin prefijos, buscar atributo UUID en nodos relacionados
        if (!$uuid && isset($xml->CfdiRelacionados->CfdiRelacionado)) {
            $uuid = (string) ($xml->CfdiRelacionados->CfdiRelacionado['UUID'] ?? '');
        }

        if (!$uuid) {
            throw new \Exception("El XML no contiene UUID (ni en TimbreFiscalDigital ni en CfdiRelacionado).");
        }

        // -----------------------------
        // Folio
        // -----------------------------
        $folio = (string) ($xml['Folio'] ?? substr($uuid, -6));

        // -----------------------------
        // Emisor
        // -----------------------------
        $emisor = 'Desconocido';
        if (isset($namespaces['cfdi'])) {
            $emisor = (string) ($xml->xpath('//cfdi:Emisor/@Nombre')[0] 
                ?? $xml->xpath('//cfdi:Emisor/@Rfc')[0] 
                ?? 'Desconocido');
        } elseif (isset($xml->Emisor)) {
            $emisor = (string) ($xml->Emisor['Nombre'] ?? $xml->Emisor['Rfc'] ?? 'Desconocido');
        }

        // -----------------------------
        // Receptor
        // -----------------------------
        $receptor = 'Desconocido';
        if (isset($namespaces['cfdi'])) {
            $receptor = (string) ($xml->xpath('//cfdi:Receptor/@Nombre')[0] 
                ?? $xml->xpath('//cfdi:Receptor/@Rfc')[0] 
                ?? 'Desconocido');
        } elseif (isset($xml->Receptor)) {
            $receptor = (string) ($xml->Receptor['Nombre'] ?? $xml->Receptor['Rfc'] ?? 'Desconocido');
        }

        // -----------------------------
        // Moneda y Total
        // -----------------------------
        $moneda = (string) ($xml['Moneda'] ?? 'MXN');
        $total = (float) ($xml['Total'] ?? 0);

        // -----------------------------
        // Validar duplicados
        // -----------------------------
        if (Invoice::where('uuid', $uuid)->exists()) {
            throw new \Exception("La factura con UUID {$uuid} ya fue cargada previamente.");
        }

        // -----------------------------
        // Tipo de cambio
        // -----------------------------
        $tipoCambio = $this->exchangeRateService->getTipoCambio($moneda);

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
