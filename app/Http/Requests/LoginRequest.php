<?php
namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class LoginRequest extends FormRequest
{
    public function rules()
    {
        return [
            'email' => 'required|email',
            'password' => 'required|string|min:8',
        ];
    }

    public function messages()
    {
        return [
            'email.required' => 'Email sahəsi mütləqdir.',
            'email.email' => 'Daxil edilən email formatı düzgün deyil.',
            'password.required' => 'Şifrə sahəsi mütləqdir.',
            'password.min' => 'Şifrə ən azı 8 simvoldan ibarət olmalıdır.',
        ];
    }
}
