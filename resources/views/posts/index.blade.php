@extends('layouts.app')

@section('content')
    <h1>Posts</h3>
    @if(count($posts) > 0)
        @foreach ($posts as $post)
            <div class="list-group">
                <div class="list-group-item">
                    <h4> <a href="/posts/{{$post->id}}">{{$post->title}} </a></h4>
                    <small>Written on {{$post->created_at}} by {{$post->user->name}}</small>
                </div>
            </div>    
        @endforeach
        {{$posts->links()}}
    @else
        <p>No posts found</p>
    @endif
@endsection