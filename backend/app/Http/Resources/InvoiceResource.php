<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;
use App\Models\Invoice;

/**
 * Resource InvoiceResource
 *
 * Transforma un modelo Invoice en respuesta estandarizada para la API.
 *
 * @mixin \App\Models\Invoice
 */
class InvoiceResource extends JsonResource
{
    public function toArray(Request $request): array
    {
        return [
            'uuid'        => $this->uuid,
            'folio'       => $this->folio,
            'emisor'      => $this->emisor,
            'receptor'    => $this->receptor,
            'moneda'      => $this->moneda,
            'total'       => $this->total,
            'tipo_cambio' => $this->tipo_cambio,
            'created_at'  => $this->created_at?->format('Y-m-d H:i:s'),
        ];
    }
}
