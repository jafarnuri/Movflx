<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class MovRequest extends FormRequest
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
        $rules = [
            'title' => 'required|string|max:255',
            'subtitle' => 'nullable|string|max:255',
            'category_id' => 'required|exists:movie_categories,id', // Doğru cədvəl adı
            'release_year' => 'required|string|digits:4', // 4 rəqəmli il
            'quality' => 'nullable|string|max:255', // Keyfiyyət üçün string
            'duration' => 'nullable|integer|min:0', // Müddət integer
            'trailer_url' => 'required|url|max:255', // URL formatı
            'movie_url' => 'nullable|url|max:255', // URL formatı
            'description' => 'nullable|string|max:1000', // Mətn formatı
            'status' => 'required|boolean', // Boolean tipi (0 və ya 1)
            'poster_image' => 'nullable|image|max:2048', // Şəkil faylı
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
