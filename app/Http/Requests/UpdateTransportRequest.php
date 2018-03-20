<?php

namespace App\Http\Requests;

use Illuminate\Validation\Rule;
use Illuminate\Foundation\Http\FormRequest;

class UpdateTransportRequest extends FormRequest
{
    public function authorize()
    {
        return $this->user()->id == $this->transport->user_id;
    }
    
    public function rules()
    {
        $transport = $this->route('transport');
        
        return [
        'model' =>     'required',
        'govnumber' => ['required',Rule::unique('transports')->ignore($transport->id)],
        'bsmt_id' =>   ['required',Rule::unique('transports')->ignore($transport->id)]
        ];
    }
}
