<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;
use App\Models\Invoice;

/**
 * @mixin \App\Models\Invoice
 */
class InvoiceResource extends JsonResource {
    public function toArray($request): array {
        return [
            'uuid'        => $this->uuid,
            'folio'       => $this->folio,
            'emisor'      => $this->emisor,
            'receptor'    => $this->receptor,
            'moneda'      => $this->moneda,
            'total'       => $this->total,
            'tipo_cambio' => $this->tipo_cambio,
        ];
    }
}
