@extends('layouts.auth')

@section('body')
    <section class="vh-100 d-flex align-items-center justify-content-center">
        <div class="container">
            <div class="row d-flex justify-content-center">
                <div class="col-12 col-lg-5 px-6">
                    <div class="text-center">
                        <a href="{{ route('home') }}" class="nav-link mb-3 ">
                            <img src="{{ url('assets/images/main-logo-ceritadesain.png') }}" class="img-fluid w-50"
                                alt="CeritaDesain logo">
                        </a>
                        <h1 class="text-white fs-4">Reset Password</h1>
                        <p class="text-white-50">Masukkan email Anda untuk menerima link reset password.</p>
                    </div>

                    <div class="mb-5 text-white">
                        <form action="{{ route('auth.password.email') }}" method="POST">
                            @csrf
                            <div class="mb-3">
                                <label for="email" class="form-label">Email</label>
                                <input type="email" class="form-control @error('email') is-invalid @enderror"
                                    id="email" name="email" placeholder="email@uiux.com" value="{{ old('email') }}"
                                    autocomplete="off" autofocus>
                                @error('email')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class="mb-3 d-grid">
                                <button type="submit" class="btn btn-primary rounded-2">Kirim Link Reset Password</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
