<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>CeritaDesain</title>


    @vite(['resources/scss/app.scss', 'resources/js/app.js'])
</head>

<body>
    {{-- NAVBAR --}}
    <nav class="navbar navbar-dark navbar-expand-lg">
        <div class="container flex justify-content-between">
            <a class="navbar-link" href="#"><img class="h-48px" src="{{ url('assets/images/ceritadesain-logo.png') }}"
                    alt="ceritadesain-logo"></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mx-0 mx-lg-3">
                    <li class="nav-item d-block d-lg-none d-xl-block">
                        <a class="nav-link active" aria-current="page" href="{{ route('home') }}">Beranda</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Diskusi</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-nowrap" href="#">Kebijakan Privasi</a>
                    </li>
                </ul>
                <form class="d-flex w-100 me-4 my-2 my-lg-0" role="search" action="#" method="GET">
                    <div class="input-group">
                        <span class="input-group-text border-end-0 "><img
                                src="{{ url('assets/images/search-vector.png') }}" alt="Search"></span>
                        <input class="form-control border-start-0 ps-0 " type="search" placeholder="Cari diskusi..."
                            aria-label="Search" name="" value="">
                    </div>
                </form>
                <ul class="navbar-nav ms-auto my-2 my-lg-0">
                    <li class="nav-item my-auto">
                        <a class="nav-link text-nowrap " href="#"">Masuk</a>
                    </li>
                    <li class="nav-item ps-1 pe-0">
                        <a class="btn btn-primary-black " href="#"">Daftar</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    {{-- HERO --}}
    <section class="container-fluid hero ">
        <div class="row align-items-center h-100 text-center  ">
            <div class="col-12 col-lg-12  ">
                <div class=" hero-text">
                    <h1 class="text-white">Selamat Datang di DesignSpeak <br>
                        Komunitas untuk Para Penggemar UI/UX</h1>
                </div>
                <div class=" hero-text pt-2">
                    <p class="mb-4 text-white  ">Selamat Datang di CeritaDesain, tempat kreativitas bertemu dengan
                        kolaborasi
                        dalam
                        dunia desain UI/UX yang dinamis. Terjunlah ke dalam komunitas yang bersemangat, di mana desainer
                        penuh gairah seperti Anda berkumpul untuk berbagi wawasan, bertukar ide, dan meningkatkan
                        keterampilan mereka.</p>
                </div>
                <a href="#" class="btn btn-primary me-2 mb-2 mb-lg-0">Masuk</a>
                <a href="#" class="btn btn-secondary mb-2 mb-lg-0">Gabung Diskusi</a>
            </div>
        </div>
    </section>

    {{-- PROMOTION SECTION --}}
    <section class="container height-promotion text-white d-flex align-items-center justify-content-center">
        <div class="row w-100 align-items-center">
            <div class="col-12 col-lg-6 ">
                <h2>Gabung <br> Komunitas Kami</h2>
            </div>
            <div class="col-12 col-lg-6 d-flex flex-column align-items-center">
                <div class="col-12 col-lg-4 ">
                    <h2 class="font-extra-extra-large">51,875</h2>
                    <p class="font-small">Diskusi</p>
                </div>
                <div class="col-12 col-lg-4 pt-2 pt-lg-5">
                    <h2 class="font-extra-extra-large">12,984</h2>
                    <p class="font-small">Jawaban</p>
                </div>
                <div class="col-12 col-lg-4 pt-2 pt-lg-5">
                    <h2 class="font-extra-extra-large ">11,675</h2>
                    <p class="font-small">Pengguna</p>
                </div>
            </div>
        </div>
    </section>

    {{-- INFOGRAPHIC SECTION --}}
    <section class="container height-promotion text-white d-flex align-items-center justify-content-center">
        <div class="container text-center">
            <div class="row p-2 p-lg-5">
                <div class="col-lg-6 col-sm-12   d-flex align-items-center justify-content-center ">
                    <div>
                        <h2>Kolaborasi Komunitas</h2>
                        <p>Dengan menggunakan platform CeritaDesain, Anda dapat terhubung dengan komunitas luas dari
                            profesional dan penggemar UI/UX. Mulai dari desainer senior hingga pemula, platform ini
                            menyediakan ruang untuk kolaborasi, pertukaran ide, dan umpan balik yang berharga.</p>
                    </div>
                </div>
                <div class="col-lg-6 col-sm-12   order-first order-lg-last">
                    <img class="info-image pb-2" src="{{ url('assets/images/image-1.png') }}" alt="image-1">
                </div>

            </div>
            <div class="row p-lg-5">
                <div class="col-lg-6 col-sm-12 ">
                    <img class="info-image pb-2" src="{{ url('assets/images/image-2.png') }}" alt="image-2">
                </div>
                <div class="col-lg-6 col-sm-12 d-flex align-items-center justify-content-center ">
                    <div>
                        <h2>Pusat Sumber Informasi</h2>
                        <p>CeritaDesain juga berfungsi sebagai pusat sumber daya lengkap untuk segala hal yang berkaitan
                            dengan UI/UX. Anda akan menemukan artikel, tutorial, dan sumber daya lain yang berguna yang
                            dibagikan oleh anggota komunitas. Mulai dari tren terbaru dalam desain antarmuka hingga
                            teknik pengujian pengguna, platform ini memberikan akses ke informasi terkini dan dapat
                            diandalkan.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- Help Others SECTION --}}



    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
</body>

</html>
