<?php

namespace App\Rules;

use Closure;
use Illuminate\Contracts\Validation\ValidationRule;

class CustomPassword implements ValidationRule
{
    /**
     * Run the validation rule.
     *
     * @param  \Closure(string): \Illuminate\Translation\PotentiallyTranslatedString  $fail
     */
    public function validate(string $attribute, mixed $value, Closure $fail): void
    {
         if (!preg_match('/[A-Z]/', $value) || !preg_match('/[a-z]/', $value)) {
            $fail('Kata sandi harus mengandung minimal satu huruf besar dan satu huruf kecil.');
        }
    }
}