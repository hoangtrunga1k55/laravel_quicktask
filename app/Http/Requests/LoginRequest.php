<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class LoginRequest extends FormRequest
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
            'email' => 'required|email',
            'password' => 'required',
        ];
    }

    public function messages()
    {
        if (app()->getLocale() == 'vi') {
            return [
                'email.required' => 'Không được để trống email.',
                'email.email' => 'Vui lòng nhập đúng định dạng email.',
                'password.required' => 'Không được để trống mật khẩu.'
            ];
        }

        return [];
    }
}
