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
            'author' => 'required|string|max:255',
            'likes' => 'nullable|numeric|max:255',
            'comments_count' => 'nullable|numeric|max:255',
            'category_id' => 'required|exists:blog_categories,id',
            'image' => 'nullable|image|mimes:jpg,jpeg,png,gif|max:2048', // şəkil formatı
            
        ];
                // `update` əməliyyatı üçün "required" olmayan validasiya
                if ($this->isMethod('put')) {
                    // "required" olmayanları `sometimes` olaraq təyin edirik
                    $rules['title'] = 'sometimes|string|max:255';
                    $rules['slug'] = 'sometimes|string|max:255';
                    $rules['content'] = 'sometimes|numeric|min:0';
                    $rules['author'] = 'sometimes|numeric|digits:4';
                    $rules['likes'] = 'sometimes|numeric|min:0';
                    $rules['comments_count'] = 'sometimes|string|max:50';
                    $rules['category_id'] = 'sometimes|numeric|min:1';
                    $rules['image'] = 'sometimes|image|mimes:jpg,jpeg,png,gif|max:2048';
       
                }
                return $rules;
    }
}
