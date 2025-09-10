<?php

namespace App\Http\Controllers\Invoice;

use App\Actions\Invoices\ProcessInvoiceUpload;
use App\Helpers\ApiResponse;
use App\Http\Controllers\Controller;
use App\Http\Resources\InvoiceResource;
use App\Models\Invoice;
use Illuminate\Http\Request;

class InvoiceController extends Controller
{
    public function index()
    {
        $invoices = Invoice::all();
        return ApiResponse::success(InvoiceResource::collection($invoices),'Listado de facturas');
    }

    public function upload(Request $request, ProcessInvoiceUpload $action)
    {
        $request->validate([
            'xml' => 'required|file|mimes:xml',
        ]);

        try {
            $invoice = $action->handle($request->file('xml'));
            return ApiResponse::success(new InvoiceResource($invoice),'Factura cargada correctamente',201);
        } catch (\Throwable $e) {
            return ApiResponse::error('Error procesando factura', 422, $e->getMessage());
        }
    }
}
