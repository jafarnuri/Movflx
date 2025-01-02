<?php
namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AuthRequest extends FormRequest
{
    public function authorize()
    {
        return true; // Bu, request-i qəbul etməyə icazə verir
    }

    public function rules()
    {
        return [
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|string|min:8|confirmed',
            'password_confirmation' => 'required|string|min:8',
            'policy' => 'accepted',  // Terms & Conditions qəbulunu təmin edirik
        ];
    }


    public function messages()
    {
        return [
            'name.required' => 'Ad sahəsi boş buraxıla bilməz.',
            'email.required' => 'Email sahəsi boş buraxıla bilməz.',
            'email.email' => 'Zəhmət olmasa düzgün bir email ünvanı daxil edin.',
            'email.unique' => 'Bu email artıq mövcuddur.',
            'password.required' => 'Şifrə sahəsi boş buraxıla bilməz.',
            'password.min' => 'Şifrə ən azı 8 simvol olmalıdır.',
            'password.confirmed' => 'Şifrəniz təsdiq edilmədi.',
        ];
    }
}
