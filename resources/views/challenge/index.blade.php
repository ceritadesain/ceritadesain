@extends('layouts.app')

@section('body')
    <div class="container mt-4 text-white align-center">
        <h1 class="text-center mb-4">Rangkuman Buku UI/UX</h1>

        <div class="row">
            @forelse ($challenges as $challenge)
                <div class="col-md-4">
                    <div class="card mb-4 card-compe">
                        <img class="card-image-cap" src="{{ asset($challenge->gambar) }}" alt="card-image-cap">
                        <div class="card-body p-0 mt-2">
                            <h5 class="card-title">{{ $challenge->judul }}</h5>
                            <p class="card-text">{{ $challenge->preview }}</p>
                            <a href="{{ route('challenge.show', $challenge->id) }}"
                                class="btn btn-outline-light btn-sm">Detail</a>
                        </div>
                    </div>
                </div>
            @empty
                <p>Tidak ada data kompetisi.</p>
            @endforelse
        </div>
    </div>
@endsection
