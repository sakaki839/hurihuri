<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RegisterRequest extends FormRequest
{
    public function messages()
    {
        return [
            'email.required' => 'メールアドレスを入力してください',
            'email.email' => '有効なメールアドレス形式を入力してください',
            'password.required' => 'パスワードを入力してください',
            'password.min' => 'パスワードは8字以上で入力してください',
            'password.required' => 'パスワードを入力してください',
            'password.min' => 'パスワードは8字以上で入力してください',
            'password.confirmed' => 'パスワードと一致しません',
        ];
    }
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
            //
             'email' => ['required','email'],
            'password' => ['required','min:8'],
            'confirmation password' => ['required','min:8','confirmed'],
        ];
    }
}
