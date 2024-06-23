<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\SignUpRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SignUpController extends Controller
{
    public function show(){
        return view('pages.auth.sign-up');
    }

    public function signUp(SignUpRequest $request){
        // Dapatkan dulu request dari form request
        // tambahkan password dengan method bcrypt / hash password
        // tambahkan picture dummy sesuai dengan usernamenya
        // create user berdasarkan rquest yang sudah tervalidasi dan yang sudah kita proses
        // jika create berhasil maka loginkan user lalu redirect ke list disscussions
        // jika tidak berhasil maka return 500

        $validated = $request->validated();
        $validated['password'] = bcrypt($validated['password']);
        $validated['picture'] = config('app.avatar_generator_url').$validated['username'];

        $create = User::create($validated);

        if($create) {
            Auth::login($create);
            return redirect()->route('discussions.index');
        }
        return abort(500);

    }
}