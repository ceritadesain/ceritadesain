<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ForgotPasswordController extends Controller
{
     public function showLinkRequestForm()
    {
        return view('pages.auth.passwords.email');
    }

    public function sendResetLinkEmail(Request $request)
    {
        // Hanya menampilkan pesan konfirmasi tanpa mengirim email
        return redirect()->route('auth.password.reset')->with('status', 'Silakan masukkan email dan password baru Anda.');
    }
}