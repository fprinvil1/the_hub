@extends('layouts.app')

@section('content')
  <div class="jumbotron">
    <div class="container">
        <h1 class="display-3">{{$title}}</h1>
        <p></p>
        <p><a class="btn btn-secondary btn-lg" href="/about" role="button">Learn more &raquo;</a></p>
    </div>
  </div>
  
  <div class="row">
    <div class="col-sm-8 blog-main">
      @if(count($posts) > 0 )
        <h2>Trending Posts</h2><br>
        <div class="container">
          <div class="row">
            @foreach($posts as $post)
              <div class="col-md-4">
                <h2>{{$post->title}}</h2>
                <p>{!!$post->body!!} </p>
                <p><a class="btn btn-primary" href="/posts/{{$post->id}}" role="button">View details &raquo;</a></p>
              </div>
            @endforeach
          </div>
        </div>
      @endif
    </div>
    @include('inc.sidebar')
  </div>

@endsection
