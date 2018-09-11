<?php

namespace App\Http\Requests\backend;

use Illuminate\Foundation\Http\FormRequest;

class AddUserRequest extends FormRequest
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
            'password'=>'min:6|max:20',
            'email'=>'unique:useraccount,email',
        ];
    }

    public function messages()
    {
        return [

            'password.min'=>'mật khẩu phải tối thiểu là 6 ký tự',
            'password.max'=>'mật khẩu không quá 20 ký tự',
            'email.unique'=>'Email đã tồn tại',
        ];
    }
}
