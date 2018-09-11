<?php

namespace App\Http\Requests\backend;

use Illuminate\Foundation\Http\FormRequest;

class ProductRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
     public function rules()
    {
        return [
            'prod_code'=>'unique:product,prod_code',
        ];
    }
    public function messages()
    {
        return [
            'prod_code.unique'=>'Product code has exit',
        ];
    }
}
