@extends('layouts.app')

@section('content')

<div>
    <div class="container">
        <div class="row">
            <div class="col-auto ms-auto">
                <a class="btn btn-primary" href="{{ route('comics.create') }}">
                    Nuova Pasta
                </a>
            </div>
            @foreach ( $comics as $comic )
            <div class="col-2">
                <a href="{{ route('comics.show', $comic) }}">
                    <img class="w-100" src="{{ $comic->thumb }}" alt="">
                    <h3>{{ $comic->title }}</h3>
                </a>
                <div>{{ $comic->price }}$</div>
            </div>
            @endforeach
        </div>
    </div>
</div>


@endsection