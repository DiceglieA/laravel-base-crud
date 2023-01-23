@extends('layouts.app')
@section('content')
    <form action="{{route('comics.store')}}" method="POST">
        @csrf
        <div class="mb-3">
            <label class="form-label" for="">Title</label>
            <input class="form-control" type="text" name="title">
        </div>
        <div class="mb-3">
            <label class="form-label" for="">Description</label>
            <textarea class="form-control" name="description" ></textarea>
        </div>
        <div class="mb-3">
            <label class="form-label" for="">Thumb</label>
            <input class="form-control" type="text" name="thumb">
        </div>
        <div class="mb-3">
            <label class="form-label" for="">Title</label>
            <input class="form-control" type="number" name="price">
        </div>
        <div class="mb-3">
            <label class="form-label" for="">Series</label>
            <input class="form-control" type="text" name="series">
        </div>
        <div class="mb-3">
            <label class="form-label" for="">sale_date</label>
            <input class="form-control" type="date" name="sale_date">
        </div>
        <div class="mb-3">
            <label class="form-label" for="">Type</label>
            <input class="form-control" type="text" name="Type">
        </div>
        <button class="btn btn-outline-info" type="submit">Create</button>
    </form>

@endsection
