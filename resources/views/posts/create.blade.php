@extends('layout.app')

@section('content')
<h1>Create New Post</h1>
{!! Form::open(['action' => 'PostsController@store', 'enctype' => 'multipart/form-data']) !!}
<div class='form-group'>
    {{Form::label('title','Title')}}
    {{Form::text('title','',['class'=>'form-control','placeholder'=>'Title'])}}
</div>
<div class='form-group'>
    {{Form::label('description','Description')}}
    {{Form::textarea('description','', ['class'=>'form-control','placeholder'=>'Description'])}}
</div>
<div class="form-group">
    {{Form::file('cover_image')}}
</div>
{{Form::submit('Submit',['class'=>'btn btn-primary'])}}
{!! Form::close() !!}
@endsection