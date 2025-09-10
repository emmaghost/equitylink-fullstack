<?php

namespace App\Console\Commands;

use App\Actions\Invoices\ProcessInvoiceUpload; 
use Illuminate\Console\Command;
use Illuminate\Http\UploadedFile;

class ProcessInvoicesCommand extends Command
{
    protected $signature = 'invoices:process {path : Ruta del archivo XML a procesar}';
    protected $description = 'Procesa facturas XML y las guarda en la base de datos';

    public function handle(ProcessInvoiceUpload $action): int
    {
        $path = $this->argument('path');

        if (!file_exists($path)) {
            $this->error("Archivo no encontrado: $path");
            return self::FAILURE;
        }

        $file = new UploadedFile($path, basename($path), 'text/xml', null, true);

        try {
            $invoice = $action->handle($file);

            $this->info("Factura procesada: {$invoice->uuid} | Total: {$invoice->total}");
            return self::SUCCESS;
        } catch (\Throwable $e) {
            $this->error("Error procesando factura: " . $e->getMessage());
            return self::FAILURE;
        }
    }
}
