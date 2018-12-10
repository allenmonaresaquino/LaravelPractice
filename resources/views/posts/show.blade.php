@extends('layouts.app')

@section('content')
    <h1 class="mt-4" style="font-family: Gotham Bold">{{$post->title}}</h1>
    <small>Written on {{$post->created_at}}</small>
    <div>
        {!!$post->body!!}
    </div>
@endsection