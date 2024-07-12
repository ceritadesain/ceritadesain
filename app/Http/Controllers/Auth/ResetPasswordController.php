<?php

namespace App\Http\Controllers\Auth;

use App\Http\Requests\Auth\ResetPasswordRequest;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class ResetPasswordController extends Controller
{
     public function showResetForm()
    {
        return view('pages.auth.passwords.reset');
    }

    public function reset(ResetPasswordRequest $request)
    {
        $user = User::where('email', $request->email)->first();

        if ($user) {
            $user->password = bcrypt($request->password); // Pastikan password dienkripsi
            $user->save();

            Auth::login($user);

            return redirect()->route('discussions.index')->with('status', 'Password berhasil direset.');
        }

        return redirect()->back()->withErrors(['email' => 'Email tidak ditemukan.']);
    }
}