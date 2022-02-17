@extends('layout.base')

@section('content')
    @foreach ($movies as $movie)
        <div class="card">
            <h1>{{ $movie->title }}</h1>
        </div>
    @endforeach
@endsection