@extends('layouts.app')

@section('body')
    {{-- HERO --}}
    <section class="container-fluid hero ">
        <div class="row align-items-center h-100 text-center px-lg-5 ">
            <div class="col-12">
                <div class=" hero-text">
                    <h1 class="text-white">Selamat Datang di DesignSpeak <br>
                        Komunitas untuk Para Penggemar UI/UX Indonesia</h1>
                </div>
                <div class="hero-text pt-2 ">
                    <p class="mb-4 text-white">Selamat Datang di CeritaDesain, tempat kreativitas bertemu dengan
                        kolaborasi
                        dalam
                        dunia desain UI/UX yang dinamis. Terjunlah ke dalam komunitas yang bersemangat, di mana desainer
                        penuh gairah seperti Anda berkumpul untuk berbagi wawasan, bertukar ide, dan meningkatkan
                        keterampilan mereka.</p>
                </div>
                <a href="{{ route('auth.login.show') }}" class="btn btn-primary me-2 mb-2 mb-lg-0">Masuk</a>
                <a href="{{ route('discussions.index') }}" class="btn btn-secondary mb-2 mb-lg-0">Gabung Diskusi</a>
            </div>
        </div>
    </section>

    {{-- PROMOTION SECTION --}}
    <section
        class="container py-80px text-white custom-padding d-flex align-items-center justify-content-center text-center text-lg-start">
        <div class="row w-100 align-items-center">
            <div class="col-12 col-lg-6 ">
                <h2>Gabung <br> Komunitas Kami</h2>
            </div>
            <div class="col-12 col-lg-6 ">
                <div class="col-12 col-lg-4 ">
                    <h2 class="font-extra-extra-large">{{ $discussionCount }}</h2>
                    <p class="font-small">Diskusi</p>
                </div>
                <div class="col-12 col-lg-4 pt-2 pt-lg-5">
                    <h2 class="font-extra-extra-large">{{ $answerCount }}</h2>
                    <p class="font-small">Jawaban</p>
                </div>
                <div class="col-12 col-lg-4 pt-2 pt-lg-5">
                    <h2 class="font-extra-extra-large ">{{ $userCount }}</h2>
                    <p class="font-small">Pengguna</p>
                </div>
            </div>
        </div>
    </section>

    {{-- INFOGRAPHIC SECTION --}}
    <section class="container py-80px text-white custom-padding ">
        <div class="row p-2 p-lg-5">
            <div class="col-lg-6 col-sm-12 d-flex align-items-center justify-content-center   ">
                <div class="text-center">
                    <h2>Kolaborasi Komunitas</h2>
                    <p>Dengan menggunakan platform CeritaDesain, Anda dapat terhubung dengan komunitas luas dari
                        profesional dan penggemar UI/UX. Mulai dari desainer senior hingga pemula, platform ini
                        menyediakan ruang untuk kolaborasi, pertukaran ide, dan umpan balik yang berharga.</p>
                </div>
            </div>
            <div class="col-lg-6 col-sm-12 order-first order-lg-last d-flex align-items-center justify-content-center">
                <img class="info-image pb-2" src="{{ url('assets/images/image-1.png') }}" alt="image-1">
            </div>

        </div>
        <div class="row p-lg-5 pt-80px">
            <div class="col-lg-6 col-sm-12  d-flex align-items-center justify-content-center">
                <img class="info-image pb-2" src="{{ url('assets/images/image-2.png') }}" alt="image-2">
            </div>
            <div class="col-lg-6 col-sm-12 d-flex align-items-center justify-content-center ">
                <div class="text-center">
                    <h2>Pusat Sumber Informasi</h2>
                    <p>CeritaDesain juga berfungsi sebagai pusat sumber daya lengkap untuk segala hal yang berkaitan
                        dengan UI/UX. Anda akan menemukan artikel, tutorial, dan sumber daya lain yang berguna yang
                        dibagikan oleh anggota komunitas. Mulai dari tren terbaru dalam desain antarmuka hingga
                        teknik pengujian pengguna, platform ini memberikan akses ke informasi terkini dan dapat
                        diandalkan.</p>
                </div>
            </div>
        </div>

    </section>

    {{-- Help Others SECTION --}}
    <section class=" container py-80px text-white">
        <div class="container py-80px">
            <h2 class="text-center mb-5">Bantu Sesama</h2>
            <div class="row">
                @forelse ($latestDiscussions as $latestDiscussion)
                    <div class="col-12 col-lg-4 mb-3">
                        <div class="card">
                            <a href="{{ route('discussions.show', $latestDiscussion->slug) }}">
                                <h3>{{ $latestDiscussion->title }}</h3>
                            </a>
                            <div>
                                <p class="mb-5">{{ $latestDiscussion->content_preview }}</p>
                                <div class="row">
                                    <div class="col me-1 me-lg-2">
                                        <a
                                            href="{{ route('discussions.categories.show', $latestDiscussion->category->slug) }}"><span
                                                class="badge rounded-pill text-bg-light ">{{ $latestDiscussion->category->name }}</span></a>
                                    </div>
                                    <div class="col-5 col-lg-7">
                                        <div class="avatar-sm-wrapper d-inline-block">
                                            <a href="{{ route('users.show', $latestDiscussion->user->username) }}"
                                                class="me-1">
                                                <img src="{{ filter_var($latestDiscussion->user->picture, FILTER_VALIDATE_URL) ? $latestDiscussion->user->picture : Storage::url($latestDiscussion->user->picture) }}"
                                                    class="avatar rounded-circle"
                                                    alt="{{ $latestDiscussion->user->username }}">
                                            </a>
                                        </div>
                                        <span class="fs-12px">
                                            <a href="{{ route('users.show', $latestDiscussion->user->username) }}"
                                                class="me-1 fw-bold ">{{ strlen($latestDiscussion->user->username) > 7 ? substr($latestDiscussion->user->username, 0, 7) . '...' : $latestDiscussion->user->username }}</a>
                                            <span
                                                class="color-gray">{{ $latestDiscussion->created_at->diffForHumans() }}</span>
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @empty
                @endforelse


            </div>
        </div>
    </section>
    {{-- CTA --}}
    <section class="container py-80px d-flex flex-column align-items-center justify-content-center text-white">
        <h2>Siap untuk berkontribusi?</h2>
        <p class="mb-4">Ingin membuat dampak besar?</p>
        <div class="text-center">
            <a href="{{ route('discussions.index') }}" class="btn btn-secondary mb-2 mb-lg-0">Gabung Diskusi
                Sekarang!</a>
        </div>
    </section>
@endsection
