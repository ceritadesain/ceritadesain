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
                    <h2 class="mb-0">Apa perbedaan antara UI dan UX?</h2>
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

                                </div>
                                <div>
                                    <div>
                                        <span class="color-gray  ">
                                            <a href="javascript:;" id="share-discussion"><small>Share</small></a>
                                            <input type="text" value="{{ url('discussions/lorem') }}" id="current-url"
                                                class="d-none">
                                        </span>
                                    </div>

                                </div>
                            </div>
                            <div class="pb-3">
                                <p>
                                    I am working on a blogging application in Laravel 8. There are 4 user roles, among
                                    which, the I am working on a blogging application in Laravel 8. There are 4 user
                                    roles,
                                    among which, the I am working on a blogging application in Laravel 8. There are 4
                                    user
                                    roles, among which, the I am working on a blogging application in Laravel 8. There
                                    are 4
                                    user roles, among which, the I am working on a blogging application in Laravel 8.
                                    There
                                    are 4 user roles, among
                                    which, the I am working on a blogging application in Laravel 8. There are 4 user
                                    roles,
                                    among
                                    which, the I am working on a blogging application in Laravel 8. There are 4 user
                                    roles,
                                    among
                                    which, the I am working on a blogging application in Laravel 8. There are 4 user
                                    roles,
                                    among
                                    which, the I am working on a blogging application in Laravel 8. There are 4 user
                                    roles,
                                    among
                                    which, the I am working on a blogging application in Laravel 8. There are 4 user
                                    roles,
                                    among
                                    which, the
                                </p>
                            </div>
                            <div class="d-flex">
                                <div class="w-100 me-1 me-lg-2">
                                    <a href="#"><span class="badge rounded-pill text-bg-light">Facade</span></a>
                                </div>
                                <div class="flex-shrink-1">
                                    <div class="d-flex align-items-center">
                                        <img src="{{ url('assets/images/like.png') }}" alt="suka" class="pe-2">
                                        <span>3</span>
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
                                    <a href="#">
                                        <img src="{{ url('assets/images/like.png') }}" alt="Like"
                                            class="like-icon mb-1">
                                    </a>
                                    <span class="fs-4 color-gray mb-1">12</span>
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
                        <div class="fw-bold text-center">Silakan <a href="{{ route('auth.login.show') }}"
                                class="text-primary">masuk</a> atau <a href="{{ route('auth.sign-up.show') }}"
                                class="text-primary">buat akun</a>
                            untuk berpartisipasi dalam diskusi ini.
                        </div>
                    </div>
                </div>
                <div class="col-12 col-lg-4">
                    <div class="card">
                        <h3>Semua Kategori</h3>
                        <div>
                            <a href="#">
                                <span class="badge rounded-pill text-bg-light">Wireframe</span>
                                <span class="badge rounded-pill text-bg-light">User Flow</span>
                                <span class="badge rounded-pill text-bg-light">Accessibility</span>
                            </a>
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
                var copyText = $('#current-url')
                copyText[0].select();
                copyText[0].setSelectionRange(0, 99999);
                navigator.clipboard.writeText(copyText.val());
                var alert = $('#alert');
                alert.removeClass('d-none');
                var alertContainer = alert.find('.container');
                alertContainer.first().text('Link to this discussion copied succesfully');
            })
        })
    </script>
@endsection
