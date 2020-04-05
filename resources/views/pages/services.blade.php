@extends('layouts.app')

@section('content')
    <h1>{{$title}}</h1>
    This is the services page

    @if(count($services) > 0)
            <ul class="list-group">
                @foreach ($services as $service)
                    <li class="list-group-item">{{$service}}</li>    
                @endforeach
            </ul>
    @endif
@endsection