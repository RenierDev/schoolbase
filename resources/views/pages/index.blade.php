@extends('layouts.app')

@section('content')
    
    <div class="jumbotron text-center">
        <h1>Welcome To {{ config('app.name')}} </h1>
        <small> {{$title}} </small>

    </div>
@endsection
