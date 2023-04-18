@extends('layouts.app')

@section('content')

<div class="container">
    <h1>{{ $comic->title }}</h1>
</div>

<div class="container">
    <img src="{{$comic->thumb}}" alt="">
    <p>{{$comic->description}}</p>
</div>

<div class="container">
    <ul class="list-group">
        <li class="list-group-item">{{$comic->price}}</li>
        <li class="list-group-item">{{$comic->series}}</li>
        <li class="list-group-item">{{$comic->sale_date}}</li>
        <li class="list-group-item">{{$comic->type}}</li>
    </ul>
</div>

@endsection