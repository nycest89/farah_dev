@extends('layout.app')

@section('content')
<h1>Create New Post</h1>
{!! Form::open(['action' => ['PostsController@update', $data->id], 'enctype' => 'multipart/form-data']) !!}
<div class='form-group'>
    {{Form::label('title','Title')}}
    {{Form::text('title',$data->title,['class'=>'form-control','placeholder'=>'Title'])}}
</div>
<div class='form-group'>
    {{Form::label('description','Description')}}
    {{Form::textarea('description',$data->description, ['class'=>'form-control','placeholder'=>'Description'])}}
</div>
<div class="form-group">
    {{Form::file('cover_image')}}
</div>
{{Form::hidden('_method','PUT')}}
{{Form::submit('Submit',['class'=>'btn btn-primary'])}}
{!! Form::close() !!}
@endsection