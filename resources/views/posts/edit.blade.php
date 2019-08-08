@extends('layouts.app')
@section('content')
    <h1>Update Post</h1>
    <form action="{{action('PostsController@update', $post->id)}}" method="post" enctype="multipart/form-data">
    @csrf
    <input name="_method" type="hidden" value="PATCH">
        <div class="form-group">
            <label for="title">Post Title</label>
            <input id="title" name="title" value="{{$post->title}}" type="text" class="form-control">
        </div>
        <div class="form-group">
            <label for="title">Post Body</label>
            <textarea class="form-control" id="article-ckeditor" name="body" rows="7">{{$post->body}}</textarea>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
@endsection