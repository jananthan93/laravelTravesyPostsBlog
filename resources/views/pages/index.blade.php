@extends('layouts.app')

@section('content')
<div class="jumbotron text-center">

       <h1>Welcome to laravel!</h1>
       <p>This is the laravel application </p>
       <p><a class="btn btn-primary btn-lg" href="/login" role="button">Login</a>&nbsp;&nbsp;<a class="btn btn-primary btn-lg" href="/register" role="button">Register</a>&nbsp;&nbsp;<a class="btn btn-primary btn-lg" href="/logout" role="button">Logout</a></p>
</div>

@endsection