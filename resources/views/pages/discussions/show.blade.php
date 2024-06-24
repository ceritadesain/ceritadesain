@extends('layouts.app')
@section('body')
    <div class="text-white pt-4 pb-5">
        <div class="container">
            <div class="mb-5">
                <div class="d-flex align-items-center">
                    <div class="d-flex">
                        <div class="fs-2 fw-bold color-gray me-2 mb-0">Diskusi</div>
                        <div class="fs-2 fw-bold color-gray me-2 mb-0">></div>
                    </div>
                    <h2 class="mb-0">{{ $discussion->title }}</h2>
                </div>
            </div>
            <div class="row">
                <div class="col-12 col-lg-8 mb-5 mb-lg-0">
                    <div class="card card-discussions mb-5">
                        <div class="row">
                            <div class="d-flex align-items-center pb-3">
                                <div class="flex-grow-1">
                                    <div class="row">
                                        <div class="col-auto">
                                            <div class="avatar-sm-wrapper d-inline-block">
                                                <a href="#">
                                                    <img src="{{ filter_var($discussion->user->picture, FILTER_VALIDATE_URL) ? $discussion->user->picture : Storage::url($discussion->user->picture) }}"
                                                        alt="{{ $discussion->user->username }}"
                                                        class="avatar rounded-circle">
                                                </a>
                                            </div>
                                        </div>
                                        <div class="col-auto fs-6 ps-0">
                                            <a href="#" class="me-1 bold">{{ $discussion->user->username }}</a>
                                        </div>
                                        <div class="col-auto color-gray fs-6 ps-0">
                                            {{ $discussion->created_at->diffForHumans() }}
                                        </div>
                                    </div>

                                </div>
                                <div>
                                    <div>
                                        {{-- TOMBOL EDIT --}}
                                        @if ($discussion->user_id === auth()->id())
                                            <span class="color-gray  ">
                                                <a
                                                    href="{{ route('discussions.edit', $discussion->slug) }}"><small>Edit</small></a>
                                                <input type="text"
                                                    value="{{ route('discussions.show', $discussion->slug) }}"
                                                    id="current-url" class="d-none">
                                            </span>
                                        @endif


                                        {{-- TOMBOL SHARE --}}
                                        <span class="color-gray  ">
                                            <a href="javascript:;" id="share-discussion"><small>Share</small></a>
                                            <input type="text" value="{{ route('discussions.show', $discussion->slug) }}"
                                                id="current-url" class="d-none">
                                        </span>
                                    </div>

                                </div>
                            </div>
                            <div class="pb-3">
                                <p>
                                    {!! $discussion->content !!}
                                </p>
                            </div>
                            <div class="d-flex">
                                <div class="w-100 me-1 me-lg-2">
                                    <a href="{{ route('discussions.categories.show', $discussion->category->slug) }}"><span
                                            class="badge rounded-pill text-bg-light">{{ $discussion->category->slug }}</span></a>
                                </div>
                                <div class="flex-shrink-1">
                                    <div class="d-flex align-items-center">
                                        <a id="discussion-like" href="javascript:;"
                                            data-liked="{{ $discussion->liked() }}">
                                            <img src="{{ $discussion->liked() ? $likedImage : $notLikedImage }}"
                                                alt="suka" id="discussion-like-icon" class="pe-2">
                                        </a>
                                        <span id="discussion-like-count">{{ $discussion->likeCount }}</span>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <h3 class="mb-5"> 2 Jawaban</h3>

                    <div class="mb-5">
                        <div class="card card-discussions">
                            <div class="row">
                                <div class="col-1 d-flex flex-column justify-content-start align-items-center ">
                                    <a href="">
                                        <img src="" alt="Like" class="like-icon mb-1">
                                    </a>
                                    <span class="fs-4 color-gray mb-1">2</span>
                                </div>
                                <div class="col-11">
                                    <div class="align-items-start justify-content-start ">
                                        <div class="row pb-3">
                                            <div class="col-auto">
                                                <div class="avatar-sm-wrapper d-inline-block">
                                                    <a href="#">
                                                        <img src="{{ url('/assets/images/sahal1.png') }}" alt="SahalN"
                                                            class="avatar rounded-circle">
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="col-auto fs-6 ps-0">
                                                <a href="#" class="me-1 bold">SahalN</a>
                                            </div>
                                            <div class="col-auto color-gray fs-6 ps-0"> 7 jam yang lalu
                                            </div>

                                        </div>
                                        <div>
                                            <p>lorem ipsum dolor sit amet contecstur lorem ipsum dolor sit amet
                                                contecsturlorem
                                                ipsum dolor sit amet contecsturlorem ipsum dolor sit amet contecstur</p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                        @guest
                            <div class="fw-bold text-center">Silakan <a href="{{ route('auth.login.show') }}"
                                    class="text-primary">masuk</a> atau <a href="{{ route('auth.sign-up.show') }}"
                                    class="text-primary">buat akun</a>
                                untuk berpartisipasi dalam diskusi ini.
                            </div>
                        @endguest

                    </div>
                </div>
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
    </div>
    </div>
@endsection

@section('after-script')
    <script>
        $(document).ready(function() {
            $('#share-discussion').click(function() {
                let copyText = $('#current-url')
                copyText[0].select();
                copyText[0].setSelectionRange(0, 99999);
                navigator.clipboard.writeText(copyText.val());
                let alert = $('#alert');
                alert.removeClass('d-none');
                let alertContainer = alert.find('.container');
                alertContainer.first().text('Link to this discussion copied succesfully');
            });

            $('#discussion-like').click(function() {
                // dapatkan data apakah discussion ini sudah pernah dilike oleh user
                // tentukan route like ajax, berdasarkan dengan apakah ini sudah dilike atau belum
                // lakukan proses ajax
                // jika ajax berhasil maka dapatkan status jsonnya
                // jika statusnya success maka isi counter like dengan data counter like dari jsonnya
                // lalu kita ganti icon likenya berdasarkan dengan nilai variable point 1
                // jika user seblumnya sudah me-like, maka ganti icon jadi notlikedImage
                // jika user seblumnya belum me-like, maka ganti icon jadi likedImage

                let isLiked = $(this).data('liked');
                let likeRoute = isLiked ? '{{ route('discussions.like.unlike', $discussion->slug) }}' :
                    '{{ route('discussions.like.like', $discussion->slug) }}';

                $.ajax({
                    method: 'POST',
                    url: likeRoute,
                    data: {
                        '_token': '{{ csrf_token() }}'
                    }
                }).done(function(res) {
                    if (res.status === 'success') {
                        $('#discussion-like-count').text(res.data.likeCount);
                        if (isLiked) {
                            $('#discussion-like-icon').attr('src', '{{ $notLikedImage }}');
                        } else {
                            $('#discussion-like-icon').attr('src', '{{ $likedImage }}');
                        }
                        $('#discussion-like').data('liked', !isLiked);
                    }
                })

            })
        })
    </script>
@endsection
