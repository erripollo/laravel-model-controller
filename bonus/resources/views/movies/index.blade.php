@extends('layout.app')

@section('title', 'Movies Page')
    
@section('content')

    <div class="container">
        @foreach ($movies as $movie)
            
            <div class="card">
              <img src="{{$movie->poster}}" alt="">
              <div class="card-body">
                <h4 class="card-title">Title</h4>
                <p class="card-text">Body</p>
              </div>
            </div>
            <h2>{{$movie->title}}</h2>

            
        @endforeach
    </div>
    
@endsection