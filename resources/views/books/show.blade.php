@extends('layouts.app')

@section('body')
    <div class="container mt-4 text-white align-center">
        <div class="row">
            <div class="col-md-12">
                <div class="card text-white mb-4 ">
                    {!! nl2br(e($book->summary)) !!}
                </div>
            </div>
        </div>
    </div>
@endsection
