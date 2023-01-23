@extends('layouts.app')
@section('content')
    {{-- <form action="{{route('comics.update', ['comic'-> $comic])}}" method="POST"> --}}
        <form method="POST" action="{{route('comics.update', ['comic' => $comic])}}">
        @csrf
        @method('PUT')

        <div class="mb-3">
            <label class="form-label" for="">Title</label>
            <input class="form-control" type="text" name="title" value="{{ $comic->title }}">
        </div>
        <div class="mb-3">
            <label class="form-label" for="">Description</label>
            {{-- <textarea class="form-control" name="description" value="{{ $comic->description }}"></textarea> --}}
            <textarea class="form-control" name="description">{{$comic->description}}</textarea>
        </div>
        <div class="mb-3">
            <label class="form-label" for="">Thumb</label>
            <input class="form-control" type="text" name="thumb" value="{{ $comic->thumb }}">
        </div>
        <div class="mb-3">
            <label class="form-label" for="">price</label>
            <input class="form-control" type="number" name="price" value="{{ $comic->price }}">
        </div>
        <div class="mb-3">
            <label class="form-label" for="">Series</label>
            <input class="form-control" type="text" name="series" value="{{ $comic->series }}">
        </div>
        <div class="mb-3">
            <label class="form-label" for="">sale_date</label>
            <input class="form-control" type="date" name="sale_date" value="{{ $comic->sale_date }}">
        </div>
        <div class="mb-3">
            <label class="form-label" for="">Type</label>
            <input class="form-control" type="text" name="type" value="{{ $comic->type }}">
        </div>
        <button class="btn btn-outline-info" type="submit">Edit</button>
    </form>

@endsection
