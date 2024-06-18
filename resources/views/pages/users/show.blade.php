@extends('layouts.app')


@section('body')
    <section class="text-white pt-4 pb-5">
        <div class="container">
            <div class="row">
                <div class="col-12 col-lg-4 mb-5 mb-lg-0">
                    <div class="d-flex mb-4">
                        <div class="avatar-wrapper rounded-circle overflow-hidden flex-shrink-0 me-4">
                            <img src="{{ url('assets/images/sahal1.png') }}" alt="" class="avatar">
                        </div>
                        <div>
                            <div class="mb-4">
                                <div class="fs-2 fw-bold mb-1 text-break">
                                    sahaln
                                </div>
                                <div class="color-gray">
                                    Member since 1 year ago

                                </div>
                            </div>
                        </div>

                    </div>
                    <div>
                        <input type="text" id="current-url" class="d-none" value="{{ request()->url() }}">
                        <a id="share-profile" class="btn btn-primary me-4" href="javascript:;">Share</a>
                    </div>
                </div>
                <div class="col-12 col-lg-8 ">
                    <div class="mb-5">
                        <h2 class="mb-3">Diskusi Saya</h2>
                        <div>
                            <div class="card card-discussions">
                                <div class="row">
                                    <div class="row d-flex align-items-center pb-3">
                                        <div class="col-auto ">
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
                                    <div class="pb-3">
                                        <a href="{{ route('discussions.show') }}">
                                            <h3>Apa perbedaan antara UI dan UX?</h3>
                                        </a>
                                        <p>UI (User Interface) adalah tentang tampilan visual dan interaksi pengguna dengan
                                            produk
                                            digital, seperti tata letak, warna, dan tombol yang digunakan. Sementara itu,
                                            ...</p>
                                    </div>
                                    <div class="row">
                                        <div class="col-auto me-1 me-lg-2">
                                            <a href="#">
                                                <span class="badge rounded-pill text-bg-light">Affordance</span>
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
                        </div>
                    </div>
                    <div>
                        <h2 class="mb-3">Jawaban saya</h2>
                        <div>
                            <div class="card card-discussions">
                                <div class="row align-items-center">
                                    <div class="col-2 col-lg-1 text-center">
                                        12
                                    </div>
                                    <div class="col">
                                        <span>Menanggapi </span>
                                        <span class="fw-bold text-primary">
                                            <a href="#">
                                                How to add a custom validation in laravel
                                            </a>
                                        </span>

                                    </div>
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
                alertContainer.first().text('Link to this discussion copied succesfully');
            })
        })
    </script>
@endsection
