<?php

namespace App\Http\Requests\Discussion;

use Illuminate\Foundation\Http\FormRequest;

class StoreRequest extends FormRequest
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
            'title' => 'required|string|max:50',
            'category_slug' => 'required|string|exists:App\Models\Category,slug',
            'content' => 'required|string',
        ];
    }

     /**
     * Get the validation messages that apply to the rules.
     *
     * @return array<string, string>
     */
    public function messages(): array
    {
        return [
            'title.required' => 'Judul diskusi wajib diisi.',
            'title.string' => 'Judul diskusi harus berupa teks.',
            'title.max' => 'Judul diskusi tidak boleh lebih dari 110 karakter.',
            'category_slug.required' => 'Kategori wajib dipilih.',
            'category_slug.string' => 'Format kategori tidak valid.',
            'category_slug.exists' => 'Kategori yang dipilih tidak tersedia.',
            'content.required' => 'Konten diskusi wajib diisi.',
            'content.string' => 'Konten diskusi harus berupa teks.',
        ];
    }
}