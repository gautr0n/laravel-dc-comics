@extends('layouts.app')

@section('content')

<div>
    <div class="container">
        <div class="row">
            @forelse ( $comics as $comic )
            <div class="col-2">
                <img class="w-100" src="{{ $comic->thumb }}" alt="">
                <h3>{{ $comic->title }}</h3>
                <div>{{ $comic->price }}$</div>
            </div>
            @empty

            @endforelse
        </div>
    </div>
</div>


@endsection