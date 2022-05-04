@extends('templates.base')

@section('title', 'Books Listing')

@section('main')
    <ul>
        @foreach ($movies as $movie)
            <li>{{ $movie->title }}</li>
        @endforeach
    </ul>
@endsection