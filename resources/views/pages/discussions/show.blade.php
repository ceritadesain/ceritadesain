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

                                </div>
                                <div>
                                    <div class="row d-flex justify-content-end">

                                        @if ($discussion->user_id === auth()->id())
                                            {{-- TOMBOL EDIT --}}
                                            <span class="color-gray  col-auto">
                                                <a
                                                    href="{{ route('discussions.edit', $discussion->slug) }}"><small>Edit</small></a>
                                                <input type="text"
                                                    value="{{ route('discussions.show', $discussion->slug) }}"
                                                    id="current-url" class="d-none">
                                            </span>
                                            {{-- TOMBOLE DELETE --}}
                                            <form action="{{ route('discussions.destroy', $discussion->slug) }}"
                                                method="POST" class="col-auto ">
                                                @csrf
                                                @method('DELETE')
                                                <button class="border-0 bg-transparent p-0 " id="delete-discussion"><small
                                                        class="color-gray">Hapus</small></button>
                                            </form>
                                        @endif
                                        {{-- TOMBOL SHARE --}}
                                        <span class="color-gray col-auto">
                                            <a href="javascript:;" id="share-discussion"><small>Share</small></a>
                                            <input type="text"
                                                value="{{ route('discussions.show', $discussion->slug) }}" id="current-url"
                                                class="d-none ">
                                        </span>
                                    </div>
                                </div>
                            </div>
                            <div class="pb-3">
                                <div>
                                    {!! $discussion->content !!}
                                </div>
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
                    @php
                        $answerCount = $discussion->answers->count();
                    @endphp

                    <h3 class="mb-5"> {{ $answerCount }} Tanggapan</h3>

                    <div class="mb-5">
                        @forelse ($discussionAnswers as $answer)
                            <div class="card card-discussions">
                                <div class="row">
                                    <div class="col-1 d-flex flex-column justify-content-start align-items-center ">
                                        <a href="javascript:;" data-id="{{ $answer->id }}"
                                            class="answer-like d-flex flex-column justify-content-start align-items-center "
                                            data-liked="{{ $answer->liked() }}">
                                            <img src="{{ $answer->liked() ? $likedImage : $notLikedImage }}" alt="Like"
                                                class="like-icon answer-like-icon mb-1">
                                            <span
                                                class="answer-like-count fs-4 color-gray mb-1">{{ $answer->likeCount }}</span>
                                        </a>

                                    </div>
                                    <div class="col-11">
                                        <div class="align-items-start justify-content-start ">
                                            <div class="row pb-3">
                                                <div class="col-auto">
                                                    <div class="avatar-sm-wrapper d-inline-block">
                                                        <a href="#">
                                                            <img src="{{ filter_var($answer->user->picture, FILTER_VALIDATE_URL) ? $answer->user->picture : Storage::url($answer->user->picture) }}"
                                                                alt="{{ $answer->user->username }}"
                                                                class="avatar rounded-circle">
                                                        </a>
                                                    </div>
                                                </div>
                                                <span
                                                    class="col-auto fs-6 ps-0 {{ $answer->user->username === $discussion->user->username ? 'text-primary' : '' }} ">
                                                    <a href="#" class="me-1 bold">{{ $answer->user->username }}</a>
                                                </span>
                                                <div class="col-auto color-gray fs-6 ps-0">
                                                    {{ $answer->created_at->diffForHumans() }}
                                                </div>

                                                <div class="col-auto color-gray fs-6 ps-0 ms-auto">
                                                    <div class="row ">
                                                        <div class="col-12 col-lg-auto ">
                                                            @if ($answer->user_id === auth()->id())
                                                                <span class="color-gray me-2"><a
                                                                        href="{{ route('answers.edit', $answer->id) }}"><small>Edit</small></a></span>
                                                                <form action="{{ route('answers.destroy', $answer->id) }}"
                                                                    class="d-inline-block lh-1" method="POST">
                                                                    @csrf
                                                                    @method('DELETE')
                                                                    <button type="submit"
                                                                        class=" delete-answer color-gray border-0 bg-transparent p-0"><small>Hapus</small></button>
                                                                </form>
                                                            @endif
                                                        </div>

                                                    </div>
                                                </div>
                                            </div>
                                            <div>
                                                <div>{!! $answer->answer !!}</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @empty
                            <div class="card card-discussion mb-5">
                                Saat ini belum ada tanggapan
                            </div>
                        @endforelse
                        <div class="pagination-info">
                            {{ $discussionAnswers->links('vendor.pagination.bootstrap-5') }}
                        </div>

                        @auth
                            <h3 class="mb-5">Tanggapanmu</h3>
                            <div class="card card-discussions">
                                <form action="{{ route('discussions.answer.store', $discussion->slug) }}" method="POST">
                                    @csrf
                                    <div class="mb-3">
                                        <textarea name="answer" id="answer">{{ old('answer') }}</textarea>
                                    </div>
                                    <div>
                                        <button class="btn btn-primary me-4" type="submit">Kirim</button>
                                    </div>
                                </form>
                            </div>

                        @endauth
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
                alertContainer.first().text('Link untuk discusi ini sukses di salin');
            });


            $('#answer').summernote({
                placeholder: 'tulis solusi kamu di sini',
                tabSize: 2,
                height: 220,
                toolbar: [
                    ['style', ['style']],
                    ['font', ['bold', 'underline', 'clear']],
                    ['color', ['color']],
                    ['para', ['ul', 'ol', 'paragraph']],
                    ['table', ['table']],
                    ['insert', ['link']],
                    ['view', ['codeview', 'help']],
                ],
                callbacks: {
                    onInit: function() {
                        $('.note-editable').css('color', 'white');
                    }
                }
            });
            $('span.note-icon-caret').remove();


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
            });

            $('#delete-discussion').click(function(event) {
                if (!confirm('Hapus Diskusi?')) {
                    event.preventDefault();
                }
            });

            $('.delete-answer').click(function(event) {
                if (!confirm('Hapus tanggapan?')) {
                    event.preventDefault();
                }
            });

            $('.answer-like').click(function() {
                // dapatkan data apakah answer ini sudah pernah dilike oleh user
                // tentukan route like ajax, berdasarkan dengan apakah ini sudah dilike atau belum
                // lakukan proses ajax
                // jika ajax berhasil maka dapatkan status jsonnya
                // jika statusnya success maka isi counter like dengan data counter like dari jsonnya
                // lalu kita ganti icon likenya berdasarkan dengan nilai variable point 1
                // jika user seblumnya sudah me-like, maka ganti icon jadi notlikedImage
                // jika user seblumnya belum me-like, maka ganti icon jadi likedImage  

                var $this = $(this);
                var id = $this.data('id');
                var isLiked = $this.data('liked');
                var likeRoute = isLiked ? '{{ url('') }}/answers/' + id + '/unlike' :
                    '{{ url('') }}/answers/' + id + '/like';

                $.ajax({
                    method: 'POST',
                    url: likeRoute,
                    data: {
                        '_token': '{{ csrf_token() }}'
                    }
                }).done(function(res) {
                    if (res.status === 'success') {
                        $this.find('.answer-like-count').text(res.data.likeCount);

                        if (isLiked) {
                            $this.find('.answer-like-icon').attr('src', '{{ $notLikedImage }}');
                        } else {
                            $this.find('.answer-like-icon').attr('src', '{{ $likedImage }}');
                        }

                        $this.data('liked', !isLiked);

                    }
                })
            })
        });
    </script>
@endsection
