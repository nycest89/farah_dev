@extends('layout.app')

@section('content')
<h1>Blog Posts</h1>
@if (count($posts)>0)
    @foreach ($posts as $post)
        <div class='card p-3 mt-3 mb-3'>
        <h3><a href='/posts/{{$post->id}}'>{{$post->title}}</a></h3>
        <img style="width:10%" src="/storage/images/{{$post->cover_image}}">
        <small>Written on {{$post->created_at}}, by {{$post->user->name}}</small>
        </div>
    @endforeach
    {{$posts->links()}}
    <!--{{$posts->count()}}-->
@else
    No record found
@endif

@endsection