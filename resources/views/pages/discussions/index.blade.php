@extends('layouts.app')

@section('body')
    <section class="text-white pt-4 pb-5">
        <div class="container">
            <div class="mb-4">
                <div class="mb-3 d-flex flex-column flex-lg-row align-items-center justify-content-between">
                    <div class="me-4 mb-3 mb-lg-0 fs-3 ">
                        @if (@isset($search))
                            <div> {{ "Hasil pencarian dari \"$search\"" }}</div>
                        @else
                            <div>
                                <a href="{{ route('discussions.index') }}"
                                    class="{{ Route::currentRouteName() === 'discussions.index' ? 'font-weight-bold' : '' }}">Terbaru</a>
                                <a href="{{ route('popular-discussions.index') }}"
                                    class="{{ Route::currentRouteName() === 'popular-discussions.index' ? 'font-weight-bold' : '' }}">Teratas</a>
                            </div>
                        @endif
                        <span>{{ isset($withCategory) ? ' Tentang ' . $withCategory->name : '' }}</span>
                    </div>
                    <div class="d-flex justify-content-center justify-content-lg-end">
                        @auth
                            <a href="{{ route('discussions.create') }}" class="btn btn-outline-primary">Buat Diskusi Baru</a>
                        @endauth
                        @guest
                            <a href="{{ route('auth.login.show') }}" class="btn btn-primary">Masuk untuk membuat diskusi</a>
                        @endguest
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12 col-lg-8 mb-5 mb-lg-0">
                    @forelse ($discussions as $discussion)
                        {{-- DISKUSI CARD --}}
                        <div class="card card-discussions">
                            <div class="row">
                                <div class="row d-flex align-items-center pb-3">
                                    <div class="col-auto ">
                                        <div class="avatar-sm-wrapper d-inline-block">
                                            <a href="{{ route('users.show', $discussion->user->username) }}">
                                                <img src="{{ filter_var($discussion->user->picture, FILTER_VALIDATE_URL) ? $discussion->user->picture : Storage::url($discussion->user->picture) }}"
                                                    alt="{{ $discussion->user->username }}" class="avatar rounded-circle">
                                            </a>
                                        </div>
                                    </div>
                                    <div class="col-auto fs-6 ps-0">
                                        <a href="{{ route('users.show', $discussion->user->username) }}"
                                            class="me-1 bold">{{ $discussion->user->username }}</a>
                                    </div>
                                    <div class="col-auto color-gray fs-6 ps-0">
                                        {{ $discussion->created_at->diffForHumans() }}
                                    </div>
                                </div>
                                <div class="pb-3">
                                    <a href="{{ route('discussions.show', $discussion->slug) }}">
                                        <h3 class="discussion-title">{{ $discussion->title }}</h3>
                                    </a>
                                    <p>{!! $discussion->content_preview !!}
                                    </p>
                                </div>
                                <div class="row">
                                    <div class="col-auto me-1 me-lg-2">
                                        <a href="{{ route('discussions.categories.show', $discussion->category->slug) }}">
                                            <span
                                                class="badge rounded-pill text-bg-light">{{ $discussion->category->name }}</span>
                                        </a>
                                    </div>
                                    <div class="col-auto ms-auto">
                                        <div class="row justify-content-end">
                                            <div class="col-auto d-flex align-items-center ">
                                                <img src="{{ url('assets/images/like-white-heart.png') }}" alt="suka"
                                                    class="pe-2">{{ $discussion->likeCount }}
                                            </div>
                                            <div class="col-auto d-flex align-items-center ">
                                                <img src="{{ url('assets/images/diskusi.png') }}" alt="diskusi"
                                                    class="pe-2">
                                                {{ $discussion->answers->count() }}
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @empty
                        <div class="card card-discussions">
                            Saat ini belum ada diskusi
                        </div>
                    @endforelse

                    <div class="pagination-info">
                        {{ $discussions->links('vendor.pagination.bootstrap-5') }}
                    </div>


                </div>
                {{-- KATEGORI --}}
                <div class="col-12 col-lg-4">
                    <div class="card">
                        <h3>Semua Kategori</h3>
                        <div>
                            @foreach ($categories as $category)
                                <a href="{{ route('discussions.categories.show', $category->slug) }}">
                                    <span class="badge rounded-pill text-bg-light m-lg-1">{{ $category->name }}</span>
                                </a>
                            @endforeach

                        </div>
                    </div>
                    <div class="mt-4 row align-items-center ">
                        <div class="col-auto m-0 p-0 ps-3">
                            <a href="{{ route('others.about_us') }}" class="text-decoration-none">
                                <img src="{{ url('assets/images/challenge1.png') }}" alt="emoji" width="30px"
                                    style="padding-right: 4px">
                            </a>
                        </div>
                        <div class="col m-0 p-0">
                            <a href="{{ route('challenge.index') }}" class="text-decoration-none">
                                <p class="fs-5 fw-normal mb-0">UI/UX Challenges</p>
                            </a>
                        </div>
                    </div>
                    <div class="mt-4 row align-items-center ">
                        <div class="col-auto m-0 p-0 ps-3">
                            <a href="{{ route('others.about_us') }}" class="text-decoration-none">
                                <img src="{{ url('assets/images/book.png') }}" alt="emoji" width="30px"
                                    style="padding-right: 4px">
                            </a>
                        </div>
                        <div class="col m-0 p-0">
                            <a href="{{ route('books.index') }}" class="text-decoration-none">
                                <p class="fs-5 fw-normal mb-0">Buku UI/UX</p>
                            </a>
                        </div>
                    </div>
                    <div class="mt-4 row align-items-center ">
                        <div class="col-auto m-0 p-0 ps-3">
                            <a href="{{ route('others.about_us') }}" class="text-decoration-none">
                                <img src="{{ url('assets/images/podcast.png') }}" alt="emoji" width="30px"
                                    style="padding-right: 4px">
                            </a>
                        </div>
                        <div class="col m-0 p-0">
                            <a href="{{ route('podcasts.index') }}" class="text-decoration-none">
                                <p class="fs-5 fw-normal mb-0">Podcasts</p>
                            </a>
                        </div>
                    </div>
                    {{-- <div class="mt-4 row align-items-center ">
                        <div class="col-auto m-0 p-0 ps-3">
                            <a href="{{ route('others.about_us') }}" class="text-decoration-none">
                                <img src="{{ url('assets/images/writing.png') }}" alt="emoji" width="30px"
                                    style="padding-right: 4px">
                            </a>
                        </div>
                        <div class="col m-0 p-0">
                            <a href="{{ route('generate_output.index') }}" class="text-decoration-none">
                                <p class="fs-5 fw-normal mb-0">UX Writing dengan AI</p>
                            </a>
                        </div>
                    </div> --}}
                    <div class="mt-4 row align-items-center ">
                        <div class="col-auto m-0 p-0 ps-3">
                            <a href="{{ route('others.about_us') }}" class="text-decoration-none">
                                <img src="{{ url('assets/images/about-4x.png') }}" alt="emoji" width="30px"
                                    style="padding-right: 4px">
                            </a>
                        </div>
                        <div class="col m-0 p-0">
                            <a href="{{ route('others.about_us') }}" class="text-decoration-none">
                                <p class="fs-5 fw-normal mb-0">Tentang kami</p>
                            </a>
                        </div>
                    </div>
                    <div class="mt-4 row align-items-center ">
                        <div class="col-auto m-0 p-0 ps-3">
                            <a href="{{ route('others.about_us') }}" class="text-decoration-none">
                                <img src="{{ url('assets/images/contact.png') }}" alt="emoji" width="30px"
                                    style="padding-right: 4px">
                            </a>
                        </div>
                        <div class="col m-0 p-0">
                            <a href="{{ route('others.contact') }}" class="text-decoration-none">
                                <p class="fs-5 fw-normal mb-0">Kontak</p>
                            </a>
                        </div>
                    </div>
                    <div class="mt-4 row align-items-center ">
                        <div class="col-auto m-0 p-0 ps-3">
                            <a href="{{ route('others.about_us') }}" class="text-decoration-none">
                                <img src="{{ url('assets/images/help.png') }}" alt="emoji" width="30px"
                                    style="padding-right: 4px">
                            </a>
                        </div>
                        <div class="col m-0 p-0">
                            <a href="{{ route('others.help') }}" class="text-decoration-none">
                                <p class="fs-5 fw-normal mb-0">Bantuan</p>
                            </a>
                        </div>
                    </div>
                    <div class="mt-4 row align-items-center">
                        <h3 class="fs-4">Lainnya</h3>
                    </div>
                    <div class="mt-4 row align-items-center">
                        <div class="col-auto m-0 p-0 ps-3">
                            <a href="{{ route('others.code_of_coduct') }}" class="text-decoration-none">
                                <img src="{{ url('assets/images/privacy.png') }}" alt="emoji" width="30px"
                                    style="padding-right: 4px">
                            </a>
                        </div>
                        <div class="col m-0 p-0">
                            <a href="{{ route('others.privacy_policy') }}" class="text-decoration-none">
                                <p class="fs-5 fw-normal mb-0">Kebijakan Privasi</p>
                            </a>
                        </div>
                    </div>
                    <div class="mt-4 row align-items-center">
                        <div class="col-auto m-0 p-0 ps-3">
                            <a href="{{ route('others.code_of_coduct') }}" class="text-decoration-none">
                                <img src="{{ url('assets/images/code-4x.png') }}" alt="emoji" width="30px"
                                    style="padding-right: 4px">
                            </a>
                        </div>
                        <div class="col m-0 p-0">
                            <a href="{{ route('others.code_of_coduct') }}" class="text-decoration-none">
                                <p class="fs-5 fw-normal mb-0">Kode Etik</p>
                            </a>
                        </div>
                    </div>
                    <div class="mt-4 row align-items-center">
                        <div class="col-auto m-0 p-0 ps-3">
                            <a href="{{ route('others.term_of_use') }}" class="text-decoration-none">
                                <img src="{{ url('assets/images/syarat-4x.png') }}" alt="emoji" width="30px"
                                    style="padding-right: 4px">
                            </a>
                        </div>
                        <div class="col m-0 p-0 ">
                            <a href="{{ route('others.term_of_use') }}" class="text-decoration-none">
                                <p class="fs-5 fw-normal mb-0">Syarat dan Ketentuan</p>
                            </a>
                        </div>

                    </div>
                    <div class="mt-4 row align-items-center text-white-50 ps-2">
                        <p>CeritaDesain: Sebuah forum online yang membangun, ramah, dan inklusif bagi para desainer UI/UX
                            seperti Anda. Kami siap mendampingi setiap langkah perjalanan desain Anda.
                        </p>

                        <p> CeritaDesain © 2024.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
