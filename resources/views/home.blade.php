@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    <a href="/posts/create" class="btn btn-primary">Create Post</a>
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                   <a >You are logged in!</a> <br>
                   <h3>Your Blog Posts.</h3>
                   <table class="table table-stripped">
                       <tr>
                           <th>Title</th>
                           <th></th>
                           <th></th>
                       </tr>
                       @if(count($posts)>0)
                       @foreach($posts as $post)
                       <tr>
                           <th>{{$post->title}}</th>
                           <th><a href="/posts/{{$post->id}}/edit" class="btn btn-default">edit</a></th>
                           <th></th>
                       </tr>
                       @endforeach
                   </table>
                   @else
                   <p>You have No Posts.</p>
                   @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
