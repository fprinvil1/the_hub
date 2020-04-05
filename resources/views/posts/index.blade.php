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
                </div>
            </div>
        @endforeach
        
    </div>
    {{$posts->links()}}
    @else
        <p>No Posts Found</p>
    @endif
@endsection
