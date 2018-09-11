<?php

namespace App\Http\Requests\frontend;

use Illuminate\Foundation\Http\FormRequest;

class SubRequest extends FormRequest
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
            'post'=>'email|unique:subnews,email',
        ];
    }

    public function messages()
    {
        return [
            'post.email'=>'phải đúng kiểu Email',
            'post.unique'=>'Email đã tồn tại',
        ];
    }

}
