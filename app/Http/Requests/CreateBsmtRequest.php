<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreateBsmtRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
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
    switch ($this->method()) 
        {
        
        case 'PUT':
            $rules = [
                'modelnumber' => 'required|unique:modelbsmt'
             
            ];
        break;

        default:
            $rules = [
                
                'modelnumber' => 'required|unique:modelbsmt'
                
            ];
        break;
        }    
        return $rules;
    }
}
