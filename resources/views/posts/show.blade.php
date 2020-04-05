@extends('layouts.app')

@section('content')
    <a href="/posts" class="btn  btn-outline-dark">Go Back</a>
    <br><br>
    <h1>{{$post->title}}</h1>
    <img src="/storage/cover_images/{{$post->cover_image}}" style="width:50%; height:50%" alt="...">
    <br><br>
    <div>
        {!!$post->body!!}
    </div>
    <hr>
        <small>Written on: {{$post->created_at}}<br>By: {{$post->user->name}}</small>

    @if(!Auth::guest())
        @if(Auth::user()->id == $post->user_id)
            <hr>
            <a href="/posts/{{$post->id}}/edit" class="btn btn-outline-dark">Edit</a>

            {!! Form::open(['action' => ['PostsController@update', $post->id], 'method' => 'POST', 'class' => 'float-right']) !!}
                {{Form::hidden('_method','DELETE')}}
                {{Form::submit('Delete',['class' => 'btn btn-danger'])}}
            {!!Form::close()!!}
        @endif
    @endif

    <div class="comments">
        <ul class="list-group">
            @if(count($post->comments) > 0)
                <hr>
                @foreach ($post->comments as $comment)
                    <li class="list-group-item">
                        <strong>
                            {{$comment->created_at->diffForHumans()}}: &nbsp;
                        </strong>
                        {!!$comment->body!!}
                    </li>
                @endforeach
            @endif
        </ul>
    </div>
    <hr>
    @if(!Auth::guest())
        <div>
            <div class="card-block">
                <form method="POST" action="/posts/{{$post->id}}/comments">
                    {{ csrf_field() }}
                    
                    <div class="form-group">
                        <textarea name="body" placeholder="Your comment here..." class="form-control"></textarea>
                    </div>

                    <div class="form-group">
                        <button type="submit" class="btn btn-primary">Add Comment</button>
                    </div>
                </form>
            </div>
        </div>
    @else

    @endif

@endsection
