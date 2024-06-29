@extends('layouts.auth')

@section('body')
    <section class="vh-100 d-flex align-items-center justify-content-center">
        <div class="container">
            <div class="row d-flex justify-content-center">
                <div class="col-12 col-lg-5 px-6">
                    <div class="text-center">
                        <a href="#" class="nav-link mb-3 ">
                            <img src="{{ url('assets/images/logo-1.png') }}" class="img-fluid w-50" alt="CeritaDesain logo">
                        </a>
                        <h1 class="text-white fs-4">Bergabunglah dengan Komunitas CeritaDesain</h1>
                        <p class="text-white-50">Tempat di mana
                            ide-ide kreatif berkembang, kolaborasi , dan setiap desainer dapat berbagi
                            pengalaman serta belajar bersama.
                        </p>
                    </div>

                    <div class="mb-5 text-white">
                        <form action="{{ route('auth.login.login') }}" method="POST">
                            @csrf
                            <div class="mb-3 ">
                                <label for="email" class="form-label">Email</label>
                                <input type="email"
                                    class="form-control @error('email') is-invalid @enderror @error('credentials') is-invalid @enderror"
                                    id="email" name="email" placeholder="andi@ux.com" value="{{ old('email') }}"
                                    autocomplete="off" autofocus>
                                @error('email')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                                @error('credentials')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class="mb-5 ">
                                <label for="password" class="form-label">Password</label>
                                <div class="input-group">
                                    <input type="password"
                                        class="form-control border-end-0 pe-0 rounded-0 rounded-start @error('password') is-invalid @enderror"
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
                            </div>
                            <div class="mb-3 d-grid">
                                <button type="submit" class="btn btn-primary rounded-2">Masuk</button>

                            </div>
                            <div class="fs-6 ">
                                <p>Dengan masuk, Anda menyetujui <a class="text-primary"
                                        href="{{ route('others.privacy_policy') }}"> kebijakan
                                        privasi</a>, <a href="{{ route('others.term_of_use') }}" class="text-primary">syarat
                                        penggunaan</a>, dan <a class="text-primary"
                                        href="
                                        {{ route('others.code_of_coduct') }}">kode
                                        etik</a>
                                    kami.
                                </p>
                            </div>
                        </form>
                    </div>
                    <div class="text-center text-white-50">
                        Belum mempunyai akun? Daftar<a class="text-primary" href="{{ route('auth.sign-up.show') }}"><u> di
                                sini</u></a>
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
