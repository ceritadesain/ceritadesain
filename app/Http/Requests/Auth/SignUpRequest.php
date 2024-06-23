<?php

namespace App\Http\Requests\Auth;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rules\Password;
use App\Rules\CustomPassword;

class SignUpRequest extends FormRequest
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
            'email' => 'required|email|unique:App\Models\User,email|min:8|max:50',
            'password' => ['required', Password::min(8)->numbers()->symbols(), new CustomPassword],
            'username' => 'required|alpha_dash|unique:App\Models\User,username|min:3|max:50',
        ];
    }
    public function messages(): array
    {
        return [
            'email.required' => 'Email wajib diisi.',
            'email.email' => 'Format email tidak valid.',
            'email.unique' => 'Email sudah terdaftar, silakan gunakan email lain.',
            'email.min' => 'Email harus memiliki minimal 8 karakter.',
            'email.max' => 'Email tidak boleh lebih dari 50 karakter.',
            'password.required' => 'Kata sandi wajib diisi.',
            'password.min' => 'Kata sandi harus memiliki minimal 8 karakter.',
            'password.numbers' => 'Kata sandi harus mengandung minimal satu angka.',
            'password.symbols' => 'Kata sandi harus mengandung minimal satu simbol.',
            'username.required' => 'Nama pengguna wajib diisi.',
            'username.alpha_dash' => 'Nama pengguna hanya boleh mengandung huruf, angka, tanda hubung, dan garis bawah.',
            'username.unique' => 'Nama pengguna sudah terdaftar, silakan gunakan nama lain.',
            'username.min' => 'Nama pengguna harus memiliki minimal 3 karakter.',
            'username.max' => 'Nama pengguna tidak boleh lebih dari 50 karakter.',
        ];
    }
}