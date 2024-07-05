{{-- footer --}}
<footer class="py-80px">
    <div class="container">
        <div class="row">
            <div class="col-12 col-lg-6 mb-5 mb-lg-0">
                <img src="{{ url('assets/images/logo-ceritadesain.png') }}" alt="CeritaDesain Logo" class="h-32px mb-1">
                <p class="text-white">Kolaborasi UI/UX untuk Indonesia</p>
            </div>
            <div class="col-12 col-lg-6 me-auto">
                <div class="d-flex flex-column flex-lg-row justify-content-end ">
                    <div class="d-flex flex-column me-140px mb-3 mb-lg-0">
                        <p class="fw-bold fs-5 text-white text-nowrap">Kontak kami</p>
                        <ul class="list-unstyled">
                            <li class="text-white"><a
                                    href="mailto:ceritadesainapp@gmail.com">ceritadesainapp@gmail.com</a>
                            </li>
                        </ul>
                    </div>
                    <div class="d-flex flex-column">
                        <p class="fw-bold fs-5 text-white">Links</p>
                        <ul class="list-unstyled">
                            <li class="text-white mb-2"><a href="{{ route('home') }}">Beranda</a></li>
                            <li class="text-white mb-2"><a href="{{ route('discussions.index') }}">Diskusi</a></li>
                            <li class="text-white mb-2"><a href="{{ route('others.about_us') }}">Tentang kami</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
