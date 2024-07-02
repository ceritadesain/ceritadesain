@extends('layouts.app')

@section('body')
    <section class="text-white pt-4 pb-5">
        <div class="container">
            <div class="row">
                <div class="col-12 col-lg-4 mb-5 mb-lg-0">
                    <div class="d-flex mb-4">
                        <div class="avatar-wrapper rounded-circle overflow-hidden flex-shrink-0 me-4">
                            <img src="{{ $picture }}" alt="" class="avatar">
                        </div>
                        <div>
                            <div class="mb-4">
                                <div class="fs-2 fw-bold mb-1 text-break">
                                    {{ $user->username }}
                                </div>
                                <div class="color-gray">
                                    Bergabung dengan CeritaDesain sejak {{ $user->created_at->diffForHumans() }}
                                </div>
                                @auth
                                    @if ($user->id === auth()->id())
                                        <a href="{{ route('users.edit', $user->username) }}"
                                            class="btn btn-outline-primary d-flex align-content-center justify-content-center mt-2 mx-4">Edit
                                            Profile</a>
                                    @endif
                                @endauth
                            </div>
                        </div>

                    </div>
                    <div>
                        <input type="text" id="current-url" class="d-none" value="{{ request()->url() }}">
                        <a id="share-profile" class="btn btn-outline-primary me-4" href="javascript:;">Bagikan</a>
                        <a id="share-profile" class="btn btn-primary me-4" href="javascript:;">Follow</a>

                    </div>
                    <div class="card mt-4 text-white">
                        <div class="card-body">

                            <div class="row">
                                <div class="col-6">
                                    <div class="text-center">
                                        <div class="fw-bold fs-4">12</div>
                                        <div class="text-white">Pengikut</div>
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="text-center">
                                        <div class="fw-bold fs-4">3</div>
                                        <div class="text-white">Mengikuti</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-12 col-lg-8 ">
                    <div class="mb-5">
                        <h2 class="mb-3">Diskusi Saya</h2>
                        <div>
                            @forelse ($discussions as $discussion)
                                <div class="card card-discussions">
                                    <div class="row">
                                        <div class="row d-flex align-items-center pb-3">
                                            <div class="col-auto ">
                                                <div class="avatar-sm-wrapper d-inline-block">
                                                    <a href="{{ route('users.show', $discussion->user->username) }}">
                                                        <img src="{{ filter_var($discussion->user->picture, FILTER_VALIDATE_URL) ? $discussion->user->picture : Storage::url($discussion->user->picture) }}"
                                                            alt="{{ $discussion->user->username }}"
                                                            class="avatar rounded-circle">
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
                                                <a
                                                    href="{{ route('discussions.categories.show', $discussion->category->slug) }}">
                                                    <span
                                                        class="badge rounded-pill text-bg-light">{{ $discussion->category->name }}</span>
                                                </a>
                                            </div>
                                            <div class="col-auto ms-auto">
                                                <div class="row justify-content-end">
                                                    <div class="col-auto d-flex align-items-center ">
                                                        <img src="{{ url('assets/images/like-white-heart.png') }}"
                                                            alt="suka" class="pe-2">{{ $discussion->likeCount }}
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
                                {{ $discussions->appends(['answers' => $answers->currentPage()])->links('vendor.pagination.bootstrap-5') }}
                            </div>
                        </div>
                        <div>
                            <h2 class="mb-3">Jawaban saya</h2>
                            <div>
                                @forelse ($answers as $answer)
                                    <div class="card card-discussions">
                                        <div class="row align-items-center">
                                            <div class="col-2 col-lg-1 text-center">
                                                {{ $answer->likeCount }}
                                            </div>
                                            <div class="col">
                                                <span>Menanggapi </span>
                                                <span class="fw-bold text-primary">
                                                    <a href="{{ route('discussions.show', $answer->discussion->slug) }}">
                                                        {{ $answer->discussion->title }}
                                                    </a>
                                                </span>

                                            </div>
                                        </div>
                                    </div>
                                @empty
                                    <div class="card card-discussions">
                                        Saat ini belum ada list tanggapan dari diskusi
                                    </div>
                                @endforelse
                                <div class="pagination-info">
                                    {{ $answers->appends(['discussions' => $discussions->currentPage()])->links('vendor.pagination.bootstrap-5') }}
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
    </section>
@endsection

@section('after-script')
    <script>
        $(document).ready(function() {
            $('#share-profile').click(function() {
                var copyText = $('#current-url')
                copyText[0].select();
                copyText[0].setSelectionRange(0, 99999);
                navigator.clipboard.writeText(copyText.val());
                var alert = $('#alert');
                alert.removeClass('d-none');
                var alertContainer = alert.find('.container');
                alertContainer.first().text('Link untuk profil ini sukses disalin');
            })
        })
    </script>
@endsection
