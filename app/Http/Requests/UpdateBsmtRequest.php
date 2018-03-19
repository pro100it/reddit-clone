<?php


namespace App\Http\Requests;

use Illuminate\Validation\Rule;
use Illuminate\Foundation\Http\FormRequest;

class UpdateBsmtRequest extends FormRequest
{
    public function authorize()
    {
        return $this->user()->id;
    }
    
    public function rules()
    {
        $sbsmt = $this->route('bsmt');
        return [
            'modelnumber' => ['required',Rule::unique('modelbsmt')->ignore($sbsmt->id)],
            'modelimei' => 'required'
        ];
        
    }    
        
}
