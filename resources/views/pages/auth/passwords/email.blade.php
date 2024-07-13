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
                    </div>
                    <div class="mb-5 text-white">
                        <form action="{{ route('auth.password.update') }}" method="POST">
                            @csrf
                            <div class="mb-3">
                                <label for="email" class="form-label">Email</label>
                                <input type="email" class="form-control @error('email') is-invalid @enderror"
                                    id="email" name="email" placeholder="email@uiux.com" value="{{ old('email') }}"
                                    autocomplete="off">
                                @error('email')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="password" class="form-label">Password Baru</label>
                                <div class="input-group">
                                    <input type="password" class="form-control @error('password') is-invalid @enderror"
                                        id="password" name="password">
                                    <span
                                        class="input-group-text bg-white border-start-0 pe-auto @error('password') border-danger rounded-end @enderror"><a
                                            href="javascript:;" id="password-toggle"><img
                                                src="{{ url('assets/images/eye-slash.png') }}" alt="Password toggle"
                                                id="password-toggle-img"></a>
                                    </span>
                                    @error('password')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror

                                </div>
                                <div>
                                    <p class="text-white-50 m-0 pt-1 pb-1">Kata sandi harus memiliki 8-20 karakter, dengan
                                        minimal satu angka, satu simbol, satu huruf besar, dan satu huruf kecil.</p>
                                </div>
                            </div>
                            <div class="mb-3">
                                <label for="password_confirmation" class="form-label">Konfirmasi Password Baru</label>
                                <input type="password" class="form-control" id="password_confirmation"
                                    name="password_confirmation">
                            </div>
                            <div class="mb-3 d-grid">
                                <button type="submit" class="btn btn-primary rounded-2">Reset Password</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

@section('after-script')
    <script>
        let isPasswordRevealed = false;
        $('#password-toggle').on('click', function() {
            isPasswordRevealed = !isPasswordRevealed;
            if (isPasswordRevealed) {
                $('#password-toggle-img').attr('src', "{{ url('assets/images/eye.png') }}")
                $('#password').attr('type', 'text');
            } else {
                $('#password-toggle-img').attr('src', "{{ url('assets/images/eye-slash.png') }}")
                $('#password').attr('type', 'password');
            }
        })
    </script>
@endsection
