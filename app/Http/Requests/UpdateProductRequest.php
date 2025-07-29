<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateProductRequest extends FormRequest
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
            'title' => 'required',
            'author' => 'required|max:255',
            'tag_id' => 'required|numeric|min:0',
            'description' => 'required',
            'price' => 'required|numeric|min:0',
            'stock' => 'required|numeric|min:0',
            'img_url' => 'required'
        ];
    }
    public function messages(): array
    {
        return [
            'title.required' => 'Le titre est obligatoire.',
            'author.required' => 'L’auteur est obligatoire.',
            'author.max' => 'L’auteur ne peut pas dépasser 255 caractères.',

            'tag_id.required' => 'Le tag est obligatoire.',
            'tag_id.numeric' => 'Le tag doit être un identifiant numérique.',
            'tag_id.min' => 'Le tag doit être supérieur ou égal à 0.',

            'description.required' => 'La description est obligatoire.',

            'price.required' => 'Le prix est obligatoire.',
            'price.numeric' => 'Le prix doit être un nombre.',
            'price.min' => 'Le prix doit être supérieur ou égal à 0.',

            'stock.required' => 'Le stock est obligatoire.',
            'stock.numeric' => 'Le stock doit être un nombre.',
            'stock.min' => 'Le stock doit être supérieur ou égal à 0.',
        ];
    }
}
