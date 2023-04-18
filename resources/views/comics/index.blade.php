@extends('layouts.app')

@section('content')

<div>
    <div class="container">
        <div class="row">
            <div class="col-auto ms-auto">
                <a class="btn btn-primary" href="{{ route('comics.create') }}">
                    Nuova Pasta
                </a>
                <form action="{{ route('comics.destroyAll')}}" method="POST">
                    @csrf
                    @method('DELETE')
                    <input type="submit" class="btn btn-danger" value="Delete All">
                </form>
            </div>
            @foreach ( $comics as $comic )
            <div class="col-2">
                <img class="w-100" src="{{ $comic->thumb }}" alt="">
                <a href="{{ route('comics.show', $comic) }}">
                    <h3>{{ $comic->title }}</h3>
                </a>
                <div>{{ $comic->price }}$</div>
                <a href="{{ route('comics.edit', $comic) }}" class="btn btn-secondary">Edit</a>
                <form action="{{ route('comics.destroy', $comic)}}" method="POST">
                    @csrf
                    @method('DELETE')
                    <input type="submit" class="btn btn-danger" value="Delete">
                </form>
            </div>
            @endforeach
        </div>
    </div>
</div>


@endsection