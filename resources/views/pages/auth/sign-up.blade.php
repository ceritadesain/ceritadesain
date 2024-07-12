@extends('layouts.auth')

@section('body')
    <section class="container-fluid vh-100 text-white m-0">
        <div class="row justify-content-center align-items-center ">
            <div class="col-12 col-md-6  img-container d-none d-lg-block">
                <img class="img-fluid w-100 h-100 object-fit-cover" src="{{ url('assets/images/signup-image.png') }}"
                    loading="lazy" alt="signup-image">
            </div>
            <div class="col-12 col-md-6 padding-container">
                <div class="mb-5">
                    <form action="{{ route('auth.sign-up.sign-up') }}" method="POST">
                        @csrf
                        <div class="mb-3">
                            <a href="{{ route('home') }}" class="nav-link ">
                                <img src="{{ url('assets/images/main-logo-ceritadesain.png') }}" class="img-fluid w-50"
                                    alt="CeritaDesain logo">
                            </a>
                            <h3>Ayo Bergabung dengan Kami</h3>
                            <p>Buat akun untuk bergabung dengan komunitas</p>
                        </div>
                        <div class="mb-3">
                            <label for="email" class="form-label">Email</label>
                            <input type="email" class="form-control @error('email') is-invalid @enderror" id="email"
                                placeholder="email@uiux.com" autocomplete="off" autofocus name="email"
                                value="{{ old('email') }}">
                            @error('email')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="password" class="form-label">Password</label>
                            <div class="input-group">
                                <input type="password"
                                    class="form-control border-end-0 pe-0 rounded-0 rounded-start @error('password') is-invalid @enderror"
                                    id="password" name="password">
                                <span
                                    class="input-group-text bg-white border-start-0 pe-auto @error('password') border-danger rounded-end @enderror">
                                    <a href="javascript:;" id="password-toggle">
                                        <img src="{{ url('assets/images/eye-slash.png') }}" alt="Password toggle"
                                            id="password-toggle-img">
                                    </a>
                                </span>
                                @error('password')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                            <div>
                                <p class="text-white-50 m-0 pt-1 pb-1">Kata sandi harus memiliki minimal 8 karakter,
                                    mengandung minimal satu angka, satu
                                    simbol, satu huruf besar, dan satu huruf kecil.</p>
                            </div>
                        </div>
                        <div class="mb-5">
                            <label for="username" class="form-label">Username</label>
                            <input type="text" class="form-control @error('username') is-invalid @enderror"
                                id="username" autocomplete="off" name="username" value="{{ old('username') }}">
                            @error('username')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="mb-3 d-grid">
                            <button type="submit" class="btn btn-primary rounded-2">Daftar</button>
                        </div>
                    </form>
                </div>
                <div class="text-center text-white-50">
                    Sudah punya akun? Masuk <a class="text-primary" href="{{ route('auth.login.show') }}"><u>di
                            sini</u></a>
                </div>
            </div>
        </div>

    </section>
@endsection

@section('after-script')
    <script>
        var isPasswordRevealed = false;
        $('#password-toggle').on('click', function() {
            isPasswordRevealed = !isPasswordRevealed;
            if (isPasswordRevealed) {
                $('#password-toggle-img').attr('src', "{{ url('assets/images/eye.png') }}")
                $('#password').attr('type', 'text');
            } else {
                $('#password-toggle-img').attr('src', "{{ url('assets/images/eye-slash.png') }}")
                $('#password').attr('type', 'password');
            }
        });
    </script>
@endsection
