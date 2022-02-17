@extends('layout.base')

@section('content')
    <div class="movies-wrapper justify-content-center d-flex flex-wrap g-3 m-2">
        @foreach ($movies as $movie)
            <div class="card m-2 p-2 align-items-center justify-content-center">
                <h1 class="card-title">{{ $movie->title }}</h1>
                <h4>{{ $movie->original_title }}</h4>
                <h5>{{ $movie->nationality }}</h5>
                <h2>{{ $movie->date }}</h2>
                <h2 class="vote">{{ $movie->vote }}</h2>
            </div>
        @endforeach
    </div>
@endsection