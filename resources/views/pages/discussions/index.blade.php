@extends('layouts.app')

@section('body')
    <section class="text-white pt-4 pb-5">
        <div class="container">
            <div class="mb-4">
                <div class="mb-3 d-flex align-items-center justify-content-between">
                    <h2 class="me-4 mb-0">Semua diskusi</h2>
                    <div>
                        51,875 Diskusi
                    </div>
                </div>
                <a href="#" class="btn btn-primary">Masuk untuk membuat diskusi</a>
            </div>
            <div class="row">
                <div class="col-12 col-lg-8 mb-5 mb-lg-0">
                    {{-- DISKUSI CARD --}}
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
                                <p>UI (User Interface) adalah tentang tampilan visual dan interaksi pengguna dengan produk
                                    digital, seperti tata letak, warna, dan tombol yang digunakan. Sementara itu, ...</p>
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
                                            <img src="{{ url('assets/images/like.png') }}" alt="suka" class="pe-2">3
                                        </div>
                                        <div class="col-auto d-flex align-items-center ">
                                            <img src="{{ url('assets/images/diskusi.png') }}" alt="diskusi" class="pe-2">
                                            9
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                {{-- KATEGORI --}}
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
    </section>
@endsection
