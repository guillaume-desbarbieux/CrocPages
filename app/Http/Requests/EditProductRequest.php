<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class EditProductRequest extends FormRequest
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
            'author' => 'required|string|max:255',
            'description' => 'nullable|string',
            'price' => 'required|numeric|min:0.10',
            'stock' => 'required|integer|min:0',
            'tag_id' => 'nullable|exists:tags,id',
            'img_url' => 'nullable|string'
        ];
    }

    public function messages(): array
    {
        return [
            'title.required' => "Le tire est requis.",
            'title.max' => "Le titre est trop long.",
            'author.required' => "L'auteur est requis.", 
            'author.max' => "Le nom de l'auteur est trop long.",           
            'price.required' => "Le prix est requis.",
            'price.min' => "Le prix est trop bas.",
            'price.numeric' => "Le prix doit être un nombre.",
            'stock.required' => "Le stock est requis.",
            'stock.min' => "Le stock est trop bas.",
            'stock.integer' => "Le stock doit être un nombre entier.",
            'tag_id.exists' => "Le tag n'existe pas"
        ];
    }
}
