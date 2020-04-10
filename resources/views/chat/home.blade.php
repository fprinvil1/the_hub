@extends('layouts.app')

@section('content')
    <div id="app">
        <chat-room :auth-user="{{ auth()->user() }}"></chat-room>         
    </div>
@endsection

