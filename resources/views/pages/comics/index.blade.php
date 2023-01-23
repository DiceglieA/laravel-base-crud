@extends('layouts.app')

@section('content')
    <div>
        <a class="btn btn-outline-info" href="{{route('comics.create')}}">Create new Comic</a>
    </div>

    <div>
        <table class="table">
            <thead>
              <tr>
                <th scope="col">#id</th>
                <th scope="col">title</th>
                {{-- <th scope="col">description</th> --}}
                <th scope="col">image</th>
                <th scope="col">price</th>
                <th scope="col">series</th>
                <th scope="col">sale_date</th>
                <th scope="col">type</th>
                <th scope="col">Actions</th>
              </tr>
            </thead>
            <tbody>
              @foreach ($comics as $elem)
              <tr>
                <td>{{ $elem->id}}</td>
                <td>{{ $elem->title}}</td>
                {{-- <td>{{ $elem->description}}</td>  descrizione nel bottone info --}}
                <td>
                    <img src="{{ $elem->thumb}}" alt="{{ $elem->title}}">
                </td>
                <td>€ {{ $elem->price}}</td>
                <td>{{ $elem->series}}</td>
                <td>{{ $elem->sale_date}}</td>
                <td>{{ $elem->type}}</td>
                <td>
                    <a href="{{route('comics.show', $elem->id)}}">
                        <button type="button" class="btn btn-outline-info">Info</button>
                    </a>
                </td>
              </tr>
              @endforeach
            </tbody>
          </table>

          <div class="d-flex justify-content-center align-items-center">
            {{$comics->links()}}
          </div>
    </div>
@endsection
