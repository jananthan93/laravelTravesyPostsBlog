@extends('layouts.app')
@section('content')
    <h1>Posts</h1>
    @if(count($posts)>0)
        @foreach($posts as $post)
            <div class="jumbo">
               <a href="/posts/{{$post->id}}"><h3>{{$post->title}}</h3></a> 
                <small>Written on {{$post->created_at}} by {{$post->user_id}}</small>
            </div>
        @endforeach
        {{$posts->links()}}
    @else
        <p>No Posts found</p>
    @endif
@endsection