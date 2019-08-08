@extends('layouts.app')
@section('content')
    <h1>Create Post</h1>
    <form action="{{action('PostsController@store')}}" method="POST">
    @csrf
        <div class="form-group">
            <label for="title">Post Title</label>
            <input id="title" name="title" type="text" class="form-control">
        </div>
        <div class="form-group">
            <label for="title">Post Body</label>
            <textarea class="form-control" id="article-ckeditor" name="body" rows="7"></textarea>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
@endsection