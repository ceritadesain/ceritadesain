@extends('layouts.app')

@section('body')
    <div class="container mt-4 mx-auto">
        <h1 class="text-center text-white mb-4">Podcasts UI/UX</h1>
        <div class="row justify-content-center">
            @foreach ($podcasts as $podcast)
                <div class="col-md-4">
                    <div class="card mb-4 card-compe">
                        <div class="card-body p-0 mt-2 text-center">
                            <img src="{{ $podcast->image_url }}" alt="{{ $podcast->title }}" width="100"
                                class="mt-2 podcast-img">
                            <div class="mt-4">
                                <h5 class="card-title">{{ $podcast->title }}</h5>
                            </div>
                            <div>
                                <a class="btn btn-primary mt-2" href="{{ $podcast->spotify_uri }}" target="_blank">Putar di
                                    Spotify</a>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection
