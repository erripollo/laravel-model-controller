@extends('layout.app')

@section('title', 'Movies Page')
    
@section('content')

    @foreach ($movies as $movie)
        
        <h2>{{$movie->title}}</h2>
        
    @endforeach
    
@endsection