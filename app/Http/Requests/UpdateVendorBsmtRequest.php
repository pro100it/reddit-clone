<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateVendorBsmtRequest extends CreateVendorBsmtRequest
{
    public function authorize()
    {
        return $this->user()->id;
    }
}
