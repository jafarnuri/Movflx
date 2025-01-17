<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AboutRequest extends FormRequest
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
            'title' => 'required|string|max:255',
            'video_link' => 'required|url',
            'category_id' => 'required|exists:movie_categories,id',
            'release_date' => 'required|date',
            'duration' => 'required|integer|min:1', // Dəqiqə şəklində film müddəti
        ];

             // PUT və ya PATCH metodları üçün "sometimes" validasiyası
             if ($this->isMethod('put') || $this->isMethod('patch')) {
                foreach ($rules as $field => $rule) {
                    $rules[$field] = str_replace('required', 'sometimes', $rule); // "required"-i "sometimes"-lə əvəz edir
                }
            }
        
            return $rules;
    }
}
