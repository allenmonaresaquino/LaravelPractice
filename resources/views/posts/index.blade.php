@extends('layouts.app')

@section('content')
    <h1 class="mt-4" style="font-family: Gotham Bold">Posts</h1>
    @if(count($posts) > 1)
        @foreach($posts as $post)
            <div class="list-group-item mb-2" style="font-family: Gotham Light">
            <h3 class="mb-0"><a href="/posts/{{$post->id}}">{{$post->title}}</a></h3>
            <small>Written on {{$post->created_at}}</small>
            </div>
        @endforeach
    @else
    <p>No Record</p>
    
    @endif
@endsection