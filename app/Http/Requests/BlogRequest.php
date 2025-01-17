<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class BlogRequest extends FormRequest
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
            'slug' => 'nullable|string|max:255',
            'content' => 'required|string|max:1500',
            'description' => 'required|string|max:2500',
            'status' => 'required|boolean',
            'likes' => 'nullable|integer',
            'author' => 'nullable|string|max:255',
            'category_id' => 'required|exists:blog_categories,id',
            'gallery.*' => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
            'image' => 'nullable|image|mimes:jpg,jpeg,png,gif|max:2048', // şəkil formatı
            
        ];
                // `update` əməliyyatı üçün "required" olmayan validasiya
                if ($this->isMethod('put') || $this->isMethod('patch')) {
                    foreach ($rules as $field => $rule) {
                        $rules[$field] = str_replace('required', 'sometimes', $rule); // "required"-i "sometimes"-lə əvəz edir
                    }
                }
    }
} 
