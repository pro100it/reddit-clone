<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateTransportRequest extends CreateTransportRequest
{
    public function authorize()
    {
        return $this->user()->id == $this->transport->user_id;
    }
}
