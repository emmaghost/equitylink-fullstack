<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class InvoiceUploadRequest extends FormRequest {
    public function rules(): array {
        return [
            'xml' => ['required', 'file', 'mimes:xml'],
        ];
    }
}
