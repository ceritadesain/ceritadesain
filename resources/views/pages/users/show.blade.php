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
                                <div class="row mb-1 text-break p-0">
                                    <div class="col-auto fs-2 fw-bold d-flex align-items-center ">
                                        <span class="m-0 p-0"> {{ $user->username }}</span>

                                        @auth
                                            @if ($user->id === auth()->id())
                                                <a href="{{ route('users.edit', $user->username) }}" class="ms-2">
                                                    <img src="{{ url('assets/images/edit-white.png') }}" alt="Edit Icon">
                                                </a>
                                            @endif
                                        @endauth
                                    </div>
                                </div>
                                <div class="color-gray">
                                    Bergabung dengan CeritaDesain sejak {{ $user->created_at->diffForHumans() }}
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card  mt-4 text-white">
                        <div class="row">
                            <div class="col-6">
                                <div class="text-center">
                                    <div class="fw-bold fs-4">{{ $user->followers()->count() }}</div>
                                    <div class="text-white">Pengikut</div>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="text-center">
                                    <div class="fw-bold fs-4">{{ $user->follows()->count() }}</div>
                                    <div class="text-white">Mengikuti</div>
                                </div>
                            </div>
                        </div>
                    </div>


                    <div class="row mt-4 d-flex justify-content-center align-content-center">
                        <div class="col-6 col-lg-6">
                            <input type="text" id="current-url" class="d-none" value="{{ request()->url() }}">
                            <a id="share-page" class="btn btn-outline-primary me-4" href="javascript:;">Bagikan</a>
                        </div>
                        @auth
                            @if ($user->id !== auth()->id())
                                {{-- <div class="col-6 col-lg-6">
                                    <input type="text" id="current-url" class="d-none" value="{{ request()->url() }}">
                                    <a id="share-profile" class="btn btn-outline-primary me-4" href="javascript:;">Bagikan</a>
                                </div> --}}
                                <div class="col-6 col-lg-6">
                                    @if (auth()->user()->isFollowing($user))
                                        <a id="unfollow-btn" class="btn btn-primary" href="javascript:;"
                                            data-user-id="{{ $user->id }}">Berhenti Mengikuti</a>
                                    @else
                                        <a id="follow-btn" class="btn btn-primary" href="javascript:;"
                                            data-user-id="{{ $user->id }}">Ikuti</a>
                                    @endif
                                </div>
                            @endif
                        @endauth
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
                                                <h3 class="discussion-title">{{ $discussion->title }}</h3>
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
                            <h2 class="mb-3">Tanggapan Saya</h2>
                            <div>
                                @foreach ($answers as $answer)
                                    @if ($answer->discussion && $answer->discussion->exists)
                                        <div class="card card-discussions">
                                            <div class="row align-items-center">
                                                <div class="col-2 col-lg-1 text-center">
                                                    {{ $answer->likeCount }}
                                                </div>
                                                <div class="col">
                                                    <span>Menanggapi </span>
                                                    <span class="fw-bold text-primary">
                                                        <a
                                                            href="{{ route('discussions.show', $answer->discussion->slug) }}">
                                                            {{ $answer->discussion->title }}
                                                        </a>
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                    @endif
                                @endforeach

                                @if ($answers->isEmpty())
                                    <div class="card card-discussions">
                                        Saat ini belum ada list tanggapan dari diskusi
                                    </div>
                                @endif
                                <div class="pagination-info">
                                    {{ $answers->appends(['discussions' => $discussions->currentPage()])->links('vendor.pagination.bootstrap-5') }}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

@section('after-script')
    @include('partials.copy-link-to-current-page')
    <script>
        $(document).ready(function() {
            // $('#share-profile').click(function() {
            //     var copyText = $('#current-url');
            //     copyText[0].select();
            //     copyText[0].setSelectionRange(0, 99999);
            //     navigator.clipboard.writeText(copyText.val());
            //     var alert = $('#success-alert');
            //     alert.removeClass('d-none');
            //     var alertContainer = alert.find('.container');
            //     alertContainer.first().text('Link sukses disalin');

            //     setTimeout(function() {
            //         location.reload(); // Refresh halaman setelah 3 detik
            //     }, 3000); // Delay 3 detik sebelum merefresh halaman
            // });

            $('#follow-btn').click(function() {
                var userId = $(this).data('user-id');
                $.ajax({
                    url: '/follow/' + userId,
                    type: 'POST',
                    data: {
                        _token: '{{ csrf_token() }}'
                    },
                    success: function(response) {
                        var alert = $('#success-alert');
                        alert.removeClass('d-none');
                        var alertContainer = alert.find('.container');
                        alertContainer.first().text(response.message);
                        if (response.message.includes('now following')) {
                            $('#follow-btn').hide();
                            $('#unfollow-btn').show();
                        }
                        setTimeout(function() {
                            $('#success-alert').addClass('d-none').removeClass(
                                'alert-success');
                            location.reload(); // Refresh halaman setelah aksi berhasil
                        }, 1000); // Sembunyikan alert setelah 3 detik


                    },
                    error: function(xhr) {
                        var alert = $('#error-alert');
                        alert.removeClass('d-none');
                        var alertContainer = alert.find('.container');
                        alertContainer.first().text('Error: ' + xhr.responseJSON.message);
                        setTimeout(function() {
                            $('#error-alert').addClass('d-none').removeClass(
                                'alert-danger');
                        }, 5000); // Sembunyikan alert setelah 2 detik
                    }
                });
            });

            $('#unfollow-btn').click(function() {
                var userId = $(this).data('user-id');
                $.ajax({
                    url: '/unfollow/' + userId,
                    type: 'POST',
                    data: {
                        _token: '{{ csrf_token() }}'
                    },
                    success: function(response) {
                        var alert = $('#success-alert');
                        alert.removeClass('d-none');
                        var alertContainer = alert.find('.container');
                        alertContainer.first().text(response.message);
                        if (response.message.includes('have unfollowed')) {
                            $('#follow-btn').show();
                            $('#unfollow-btn').hide();
                        }
                        setTimeout(function() {
                            $('#success-alert').addClass('d-none').removeClass(
                                'alert-success');
                            location.reload(); // Refresh halaman setelah aksi berhasil
                        }, 1000); // Sembunyikan alert setelah 3 detik
                    },
                    error: function(xhr) {
                        var alert = $('#error-alert');
                        alert.removeClass('d-none');
                        var alertContainer = alert.find('.container');
                        alertContainer.first().text('Error: ' + xhr.responseJSON
                            .message); // Menampilkan pesan error
                        setTimeout(function() {
                            $('#error-alert').addClass('d-none').removeClass(
                                'alert-danger');
                        }, 5000); // Sembunyikan alert setelah 3 detik
                    }
                });
            });

        });
    </script>
@endsection
