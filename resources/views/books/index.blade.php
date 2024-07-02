@extends('layouts.app')

@section('body')
    <div class="container mt-4 text-white align-center">
        <h1 class="text-center mb-4">UI/UX Challenges</h1>

        <div class="row">
            @forelse ($books as $book)
                <div class="col-md-4">
                    <div class="card mb-4 card-compe">
                        <div class="card-body p-0 mt-2">
                            <h5 class="card-title">{{ $book->judul }}</h5>
                            <p class="card-text">{{ $book->preview }}</p>
                            <a href="{{ route('books.show', $book->id) }}" class="btn btn-outline-light btn-sm">Rangkuman</a>
                        </div>
                    </div>
                </div>
            @empty
                <p>Tidak ada data kompetisi.</p>
            @endforelse
        </div>
    </div>
@endsection
