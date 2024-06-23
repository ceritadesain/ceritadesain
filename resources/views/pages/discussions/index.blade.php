@extends('layouts.app')

@section('body')
    <section class="text-white pt-4 pb-5">
        <div class="container">
            <div class="mb-4">
                <div class="mb-3 d-flex align-items-center justify-content-between">
                    <h2 class="me-4 mb-0">
                        @if (@isset($search))
                            {{ "Hasil pencarian dari \"$search\"" }}
                        @else
                            {{ 'Semua Diskusi' }}
                        @endif
                        <span>{{ isset($withCategory) ? ' Tentang ' . $withCategory->name : '' }}</span>
                    </h2>
                    <div>
                        {{ $discussions->total() }} Diskusi
                    </div>
                </div>
                @auth
                    <a href="{{ route('discussions.create') }}" class="btn btn-primary">Buat diskusi</a>
                @endauth
                @guest
                    <a href="{{ route('auth.login.show') }}" class="btn btn-primary">Masuk untuk membuat diskusi</a>
                @endguest
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
                                        <h3>{{ $discussion->title }}</h3>
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
                                                <img src="{{ url('assets/images/like.png') }}" alt="suka"
                                                    class="pe-2">3
                                            </div>
                                            <div class="col-auto d-flex align-items-center ">
                                                <img src="{{ url('assets/images/diskusi.png') }}" alt="diskusi"
                                                    class="pe-2">
                                                9
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
                    <div class="mt-4">
                        <p class="fs-5 fw-normal"> <a href="{{ route('others.about_us') }}">Tentang kami</a></p>
                    </div>
                    <div class="mt-4">
                        <p class="fs-5 fw-normal"> <a href="{{ route('others.code_of_coduct') }}">Kode Etik</a></p>
                    </div>
                    <div class="mt-4">
                        <p class="fs-5 fw-normal"> <a href="{{ route('others.term_of_use') }}">Syarat dan Ketentuan</a></p>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
