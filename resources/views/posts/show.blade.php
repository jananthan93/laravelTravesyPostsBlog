@extends('layouts.app')
@section('content')
<a href="{{action('PostsController@index')}}" class="btn btn-primary">Back</a>
    <h1>{{$post->title}}</h1>
   <small>Written on {{$post->created_at}}</small>
   <div>
        {!!$post->body!!}
   </div>
  
   <a href="/posts/{{$post->id}}/edit" class="btn btn-warning">Edit</a>
   <form action="{{action('PostsController@destroy', $post['id'])}}" method="post">
            @csrf
            <input name="_method" type="hidden" value="DELETE">
            <button class="btn btn-danger" type="submit">Delete</button>
     </form>
@endsection