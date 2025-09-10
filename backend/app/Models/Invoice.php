<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Modelo Invoice
 *
 * Representa una factura cargada desde un XML CFDI.
 * Contiene atributos clave: UUID, folio, emisor, receptor, moneda,
 * total y tipo de cambio.
 */
class Invoice extends Model
{
    protected $fillable = [
        'uuid',
        'folio',
        'emisor',
        'receptor',
        'moneda',
        'total',
        'tipo_cambio',
    ];
}