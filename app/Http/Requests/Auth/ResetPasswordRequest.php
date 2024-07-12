<?php

namespace App\Http\Requests\Auth;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rules\Password;
use App\Rules\CustomPassword;

class ResetPasswordRequest extends FormRequest
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
            'email' => 'required|email|min:8|max:20',
            'password' => ['required', 'confirmed', Password::min(8)->numbers()->symbols(), new CustomPassword],
        ];
    }
     public function messages(): array
    {
        return [
            'email.required' => 'Email wajib diisi.',
            'email.email' => 'Format email tidak valid.',
            'email.min' => 'Email harus memiliki minimal 8 karakter.',
            'email.max' => 'Email tidak boleh lebih dari 20 karakter.',
            'password.required' => 'Kata sandi wajib diisi.',
            'password.min' => 'Kata sandi harus memiliki minimal 8 karakter.',
            'password.numbers' => 'Kata sandi harus mengandung minimal satu angka.',
            'password.symbols' => 'Kata sandi harus mengandung minimal satu simbol.',
            'password.confirmed' => 'Konfirmasi kata sandi tidak cocok.',
        ];
    }
}