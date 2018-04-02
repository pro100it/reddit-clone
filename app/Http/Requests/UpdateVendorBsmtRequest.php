<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateVendorBsmtRequest extends FormRequest
{
    public function authorize()
    {
        return $this->user()->id;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'vendorname' => 'required'
            
        ];
    }
}
