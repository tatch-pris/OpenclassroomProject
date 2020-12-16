@extends('layouts.app')

@section('content')
<a href="/posts" class="btn btn-default">Go back</a>
<h1>{{$posts->title}}</h1>
<small>Written on {{$posts->created_at}}</small>
<div> 
    {{$posts->body}} : {{$posts->title}}
</div>
<hr> 
<small>Written on {{$posts->created_at}}</small>
@endsection      