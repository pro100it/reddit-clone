<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateBsmtStatusRequest extends FormRequest
{
    public function authorize()
    {
        return $this->user()->id;
    }
    
    public function rules()
    {
        return 
        [
        'status' =>     'required'
        ];
    }
}
