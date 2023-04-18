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
                <img class="w-100" src="{{ $comic->thumb }}" alt="">
                <a href="{{ route('comics.show', $comic) }}">
                    <h3>{{ $comic->title }}</h3>
                </a>
                <div>{{ $comic->price }}$</div>
                <a href="{{ route('comics.edit', $comic) }}" class="btn btn-secondary">Edit</a>
            </div>
            @endforeach
        </div>
    </div>
</div>


@endsection