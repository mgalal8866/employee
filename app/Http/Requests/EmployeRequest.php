<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class EmployeRequest extends FormRequest
{

    public function authorize()
    {
        return true;
    }


    public function rules()
    {
        return [
           'name' => 'required',
           'phone' => 'required'
        ];
    }
    public function messages()
    { 
         return [
        'name.required' =>'مطلوب'
        ];
    }
}
