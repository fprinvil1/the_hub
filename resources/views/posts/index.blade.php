@extends('layouts.app')

@section('content')
    <h1>Posts</h1>
    @if(count($posts) > 0)
    <div class="row">
        @foreach($posts as $post)
            <div class="card p-4 mt-4 mb-4" style="width: 18rem ;margin-right:2rem">
            <img src="/storage/cover_images/{{$post->cover_image}}" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title"><a href="/posts/{{$post->id}}">{{$post->title}}</a></h5>
                    <small>Written on: {{$post->created_at}}<br>By: {{$post->user->name}}</small>
                      <!--Myron-->
                      <div class="post" data-postid="{{ $post->id }}"><!--links to like.js-->
                        <div class="interaction">
                            <a href="#" class="btn btn-xs btn-light like" >    
                                {{ Auth::user()->likes()->where('post_id', $post->id)->first() ? Auth::user()->likes()->where('post_id', $post->id)->first()->like == 1 ? 'Already liked' : 'Like' : 'Like'  }}
                          </a>
                            |
                            <a href="#" class="btn btn-xs btn-danger like">  
                                {{ Auth::user()->likes()->where('post_id', $post->id)->first() ? Auth::user()->likes()->where('post_id', $post->id)->first()->like == 0 ? 'Already disliked' : 'Dislike' : 'Dislike' }}              
                            </a>       
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
        
    </div>
    {{$posts->links()}}
    @else
        <p>No Posts Found</p>
    @endif
         <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
  <!-- Include all compiled plugins (below), or include individual files as needed -->
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
  <script src="{{ asset('/js/like.js') }}"></script>
  <script>
    var token = '{{ Session::token() }}';
    var urlLike = '{{ route('like') }}';
  </script>
@endsection
