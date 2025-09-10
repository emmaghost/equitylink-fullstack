<?php

namespace App\Actions\Invoices;

use Illuminate\Http\UploadedFile;

class ParseInvoiceXml {
    public function handle(UploadedFile $xml): array {
        $content = simplexml_load_file($xml->getRealPath());

        $uuid = (string) ($content->attributes()->UUID ?? '') ?: uniqid();

        return [
            'uuid'     => $uuid,
            'folio'    => (string) ($content->attributes()->Folio ?? '') ?: substr($uuid, -8),
            'emisor'   => isset($content->Emisor['Nombre']) ? (string) $content->Emisor['Nombre'] : 'N/A',
            'receptor' => isset($content->Receptor['Nombre']) ? (string) $content->Receptor['Nombre'] : 'N/A',
            'moneda'   => (string) ($content->attributes()->Moneda ?? '') ?: 'MXN',
            'total'    => (float) ($content->attributes()->Total ?? 0),
        ];
    }
}
