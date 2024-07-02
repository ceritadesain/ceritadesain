@extends('layouts.app')

@section('body')
    <div class="container mt-4 text-white align-center">
        <div class="row">
            <div class="col-md-4 d-flex flex-column align-items-center">
                <img src="{{ asset($challenge->gambar) }}" class="card-compe-img mb-3">
                <h3 class="text-start">{{ $challenge->judul }}</h3>
                <p class="text-start">Unggah hasil kerja Anda di LinkedIn/Medium/Instagram dan tandai kami dengan hashtag
                    #ceritadesainchallenges agar kami bisa melihatnya.</p>
            </div>
            <div class="col-md-8">
                <div class="card text-white mb-4 p-4">
                    {!! nl2br(e($challenge->deskripsi)) !!}
                </div>
            </div>
        </div>
    </div>
@endsection
