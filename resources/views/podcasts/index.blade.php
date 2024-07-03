@extends('layouts.app')

@section('body')
    <div class="container">
        <h1 class="text-center text-white mb-4">Podcasts UI/UX</h1>
        <div class="row">
            @foreach ($podcasts as $podcast)
                <div class="col-md-4">
                    <div class="card mb-4 card-compe">
                        <div class="card-body p-0 mt-2">
                            <img src="{{ $podcast->image_url }}" alt="{{ $podcast->title }}" width="100" class="mt-2">
                            <h5 class="card-title" class="mt-2">{{ $podcast->title }}</h5>
                            <a class="btn btn-primary mt-2" href="{{ $podcast->spotify_uri }}" target="_blank">Play on
                                Spotify</a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection
