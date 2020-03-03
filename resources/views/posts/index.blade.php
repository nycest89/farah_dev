@extends('layout.app')

@section('content')
<h1>Blog Posts</h1>
<div class="card-body">
    @if (session('status'))
        <div class="alert alert-success" role="alert">
             {{ session('status') }}
         </div>
      @endif
        <form class="form-inline my-2 my-lg-0">
             <button class="btn btn-sm btn-outline-secondary" type="button"><a href="/posts/create">Create New Post</a></button>
        </form>  
</div>
<hr>
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