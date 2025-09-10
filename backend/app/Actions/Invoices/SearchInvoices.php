<?php

namespace App\Actions\Invoice;

use App\Models\Invoice;
use Illuminate\Database\Eloquent\Collection;

/**
 * Action SearchInvoices
 *
 * Encargado de filtrar facturas según parámetros opcionales:
 * - UUID exacto
 * - Emisor
 * - Rango de fechas
 */
class SearchInvoices
{
    public function handle(array $filters): Collection
    {
        $query = Invoice::query();

        if (!empty($filters['uuid'])) {
            $query->where('uuid', $filters['uuid']);
        }

        if (!empty($filters['emisor'])) {
            $query->where('emisor', 'LIKE', '%' . $filters['emisor'] . '%');
        }

        if (!empty($filters['from_date']) && !empty($filters['to_date'])) {
            $query->whereBetween('created_at', [$filters['from_date'], $filters['to_date']]);
        }

        return $query->get();
    }
}
