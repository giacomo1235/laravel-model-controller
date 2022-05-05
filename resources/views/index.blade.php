@extends('templates.base')

@section('title', 'movies')

@section('main')
    <div class="container">
        @foreach ($movies as $movie)
            
            <div class="card">
                <img src="{{$movie->locandina}}" alt="">
                <p><b>Titolo:</b> {{ $movie->title }}</p>
                <p><b>Titolo originale:</b> {{ $movie->original_title }}</p>
                <p><b>Voto:</b> {{ $movie->vote }}</p>
                <p><b>Nazione:</b> {{ $movie->nationality }}</p>
                
            </div>
        @endforeach
    </div>
@endsection