<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CommentRequest extends FormRequest
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
            'blog_id' => 'required|exists:blogs,id', // Blog ID-si mövcud olmalıdır
            'name' => 'required|string|max:255', // Ad məcburidir
            'email' => 'required|email', // Düzgün e-poçt ünvanı
            'content' => 'required|string|min:3', // Şərh mətni ən azı 3 simvol olmalıdır
            'subject' => 'nullable|string|max:255', // Mövzu
            'image' => 'nullable|image|max:2048', // Şəkil formatı
        ];
     }
    protected function prepareForValidation()
{
    $this->merge([
        'blog_id' => request()->route('blog_id'), // URL parametrindən blog_id əlavə edirik
    ]);
}
}
