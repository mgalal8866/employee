<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AllowancesRequest extends FormRequest
{

    public function authorize()
    {
        return true;
    }
    public function rules()
    {
        return [
           'name' => 'required',
           'description' => 'required',           
        ];
    }
    public function messages()
    { 
         return [
        'name.required' =>'مطلوب',
        'description.required' =>'مطلوب'
        ];
    }
}
