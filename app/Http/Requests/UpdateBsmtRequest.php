<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateBsmtRequest extends CreateBsmtRequest
{
    public function authorize()
    {
        return $this->user()->id;
    }
}
