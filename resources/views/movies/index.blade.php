@extends('layout.app')

@section('title', 'Movies Page')

@section('content')

    <h1>Movies</h1>
    @foreach ($movies as $movie)
        <div class="card">
            <h2>{{$movie->title}}</h2>
            <h3>{{$movie->original_title}}</h3>
            <div>
                <span>Nationality: {{$movie->nationality}} - Date: {{$movie->date}}</span>
            </div>
            <h4>Vote: {{$movie->vote}}</h4>
        </div>
        
    @endforeach
@endsection
