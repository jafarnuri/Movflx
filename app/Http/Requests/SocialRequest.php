<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SocialRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [

            'facebook' => 'required|string|max:500',
            'twitter' => 'required|string|max:500',
            'instagram' => 'required|string|max:500',
            'linkedin' => 'required|string|max:500',
            'youtube' => 'required|string|max:500',
        ];
    }
}
