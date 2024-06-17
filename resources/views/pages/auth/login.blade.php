@extends('layouts.auth')

@section('body')
    <section class="vh-100 d-flex align-items-center justify-content-center">
        <div class="container">
            <div class="row d-flex justify-content-center">
                <div class="col-12 col-lg-5 px-6">
                    <div class="text-center">
                        <a href="#" class="nav-link mb-5 ">
                            <img src="{{ url('assets/images/ceritadesain-login-logo.png') }}" class="img-fluid w-50"
                                alt="CeritaDesain logo">
                        </a>
                        <h1 class="text-white fs-3">Bergabunglah dengan Komunitas CeritaDesain</h1>
                        <p class="text-white-50">Rangkul kreativitas dan bergabunglah dengan kami di Komunitas DesignSpeak.
                        </p>
                    </div>

                    <div class="mb-5 text-white">
                        <form action="">
                            <div class="mb-3 ">
                                <label for="email" class="form-label">Email</label>
                                <input type="email" class="form-control" id="email" placeholder="andi@ux.com"
                                    autocomplete="off" autofocus>
                            </div>
                            <div class="mb-5 ">
                                <label for="password" class="form-label">Password</label>
                                <div class="input-group">
                                    <input type="password" class="form-control border-end-0 pe-0 rounded-0 rounded-start"
                                        id="password" name="password">
                                    <span class="input-group-text bg-white border-start-0 pe-auto"><a href="javascript:;"
                                            id="password-toggle"><img src="{{ url('assets/images/eye-slash.png') }}"
                                                alt="Password toggle" id="password-toggle-img"></a></span>
                                </div>
                            </div>
                            <div class="mb-3 d-grid">
                                <button type="submit" class="btn btn-primary rounded-2">Masuk</button>

                            </div>
                            <div class="fs-6">
                                <p>Dengan masuk, Anda menyetujui kebijakan <a href="#">privasi</a>, <a
                                        href="#">syarat
                                        penggunaan</a>, dan <a href="#">kode etik</a> kami.
                                </p>
                            </div>
                        </form>
                    </div>
                    <div class="text-center text-white-50">
                        Belum punya akun?<a href="#"><u> Daftar di sini</u></a>
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
