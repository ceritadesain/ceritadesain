<?php

namespace App\Http\Requests\User;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rules\Password;
use App\Rules\CustomPassword;
use Illuminate\Validation\Rule;

class UpdateRequest extends FormRequest
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
            'username'=>['required', 'alpha_dash', Rule::unique('users')->ignore(request()->username, 'username'), 'min:3', 'max:10'], 
            'password' => ['nullable', 'confirmed', Password::min(8)->numbers()->symbols(),'max:20', new CustomPassword],
            'password_confirmation' => ['nullable'],
            'picture' => ['nullable', 'image', 'max:1500']
        ];
    }


    /**
     * Get the validation messages that apply to the request.
     *
     * @return array<string, string>
     */
    public function messages(): array
    {
        return [
            'username.required' => 'Username wajib diisi.',
            'username.alpha_dash' => 'Username hanya boleh mengandung huruf, angka, strip, dan garis bawah.',
            'username.unique' => 'Username sudah digunakan, silakan pilih username lain.',
            'username.min' => 'Nama pengguna harus memiliki minimal 3 karakter.',
            'username.max' => 'Nama pengguna tidak boleh lebih dari 10 karakter.',
            'password.confirmed' => 'Konfirmasi password tidak cocok.',
            'password.min' => 'Password minimal harus terdiri dari :min karakter.',
            'password.max' => 'Password maksimal 20 karakter.',
            'password.numbers' => 'Password harus mengandung setidaknya satu angka.',
            'password.symbols' => 'Password harus mengandung setidaknya satu simbol.',
            'picture.image' => 'File yang diunggah harus berupa gambar.',
            'picture.max' => 'Ukuran gambar tidak boleh lebih dari 1500 kilobytes.'
        ];
    }
}