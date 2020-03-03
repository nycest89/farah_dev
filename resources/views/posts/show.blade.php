@extends('layout.app')

@section('content')
<button class="btn btn-sm btn-outline-secondary" type="button"><a href="/posts">Back <<</a></button>
<h3>{{$data->title}}</h3>
<p>{!!$data->description!!}</p>
<hr>
@if(!Auth::guest())
@if(Auth::user()->id == $data->user_id)
<button class="btn btn-sm btn-outline-secondary" type="button"><a href="/posts/{{$data->id}}/edit"> Edit</a></button>

{!!Form::open(['action'=>['PostsController@destroy',$data->id],'class'=>'pull-right'])!!}
{{Form::hidden('_method','DELETE')}}
{{Form::submit('Delete', ['class'=>'btn btn-danger'])}}
{!!Form::close()!!}
@endif
@endif
@endsection