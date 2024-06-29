@extends('layouts.app')

@section('body')
    {{-- HERO --}}
    <section class="container-fluid hero ">
        <div class="row align-items-center h-100 text-center px-lg-5 ">
            <div class="col-12">
                <div class=" hero-text">
                    <h1 class="text-white">Selamat Datang di CeritaDesain <br>
                        Forum Online untuk Komunitas UI/UX Indonesia</h1>
                </div>
                <div class="hero-text pt-2 ">
                    <p class="mb-4 text-white">CeritaDesain adalah tempat berdiskusi antar sesama penggiat UI/UX.
                        Di sini, Anda bisa berbagi wawasan, bertukar ide, dan belajar bersama desainer lainnya. Ayo
                        bergabung dengan komunitas kami dan kembangkan keterampilan desain Anda bersama-sama.</p>
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
                <p>Ayo gabung dengan komunitas kami dan rasakan serunya berkolaborasi dengan para desainer hebat!</p>
            </div>
            <div class="col-12 col-lg-6 d-flex flex-column align-items-center justify-content-center">
                <div class="d-flex flex-column align-items-center w-100">
                    <div class="col-12 col-lg-4 d-flex flex-column align-items-center  mb-4">
                        <h2 class="font-extra-extra-large">{{ $discussionCount }}</h2>
                        <p class="font-small ">Diskusi</p>
                    </div>
                    <div class="col-12 col-lg-4 d-flex flex-column align-items-center mb-4">
                        <h2 class="font-extra-extra-large">{{ $answerCount }}</h2>
                        <p class="font-small">Jawaban</p>
                    </div>
                    <div class="col-12 col-lg-4 d-flex flex-column align-items-center">
                        <h2 class="font-extra-extra-large">{{ $userCount }}</h2>
                        <p class="font-small">Pengguna</p>
                    </div>
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
                    <p>Dengan menggunakan platform CeritaDesain, Anda bisa terhubung dengan komunitas besar UI/UX di
                        Indonesia
                        yang belum pernah ada sebelumnya. Mulai dari desainer pemula hingga senior, platform ini
                        menyediakan ruang untuk kolaborasi, berbagi ide, dan mendapatkan umpan balik yang berharga.</p>
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
                    <p>CeritaDesain juga sebagai pusat informasi utama untuk UI/UX. Di sini, Anda bisa menemukan artikel,
                        tutorial, dan sumber daya lain yang berguna dari anggota komunitas. Platform ini memberikan akses ke
                        tren terbaru dalam desain antarmuka dan teknik pengujian pengguna yang dapat diandalkan.</p>
                </div>
            </div>
        </div>

    </section>

    {{-- Help Others Section --}}
    <section class=" container py-80px text-white">
        <div class="container py-80px">
            <h2 class="text-center ">Bantu Sesama</h2>
            <p class="text-center mb-5">Dukung antar anggota dalam diskusi terbaru CeritaDesain!</p>
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
        <h2>Ayo gabung sekarang!</h2>
        <p class="mb-4">Siapkan diri Anda untuk aktif berpartisipasi dalam mendukung sesama</p>
        <div class="text-center">
            <a href="{{ route('discussions.index') }}" class="btn btn-secondary mb-2 mb-lg-0">Gabung
                diskusi
                di sini</a>
        </div>
    </section>
@endsection
