@extends('layout.app')

@section('title', 'Movies Page')
    
@section('content')

    <div class="container">
        @foreach ($movies as $movie)
            
            <div class="card">
              <img src="{{$movie->poster}}" alt="">
              <div class="card-body">
                    <h4 class="card-title">{{$movie->title}}</h4>
                    <p class="card-text">{{$movie->original_title}}</p>
                    <div>
                        <span>{{$movie->nationality}} - {{$movie->date}}</span>
                    </div>
                    <div class="vote">Vote: {{$movie->vote}}</div>
              </div>
            </div>
  
        @endforeach
    </div>
    
@endsection