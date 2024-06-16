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
                    <p class="mb-4 text-white ">Selamat Datang di CeritaDesain, tempat kreativitas bertemu dengan
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

    {{-- SECTION --}}

    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
</body>

</html>
