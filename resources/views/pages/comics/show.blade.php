@extends('layouts.app')

@section('content')
    <h1 class="text-center">{{$comic->title}}</h1>
    <div class="row">
        <img class="col-4 offset-4" src="{{ $comic->thumb}}" alt="{{ $comic->title}}">
    </div>
    <p>{{$comic->description}}</p>
@endsection
