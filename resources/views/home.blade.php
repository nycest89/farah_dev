@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <form class="form-inline my-2 my-lg-0">
                        <button class="btn btn-sm btn-outline-secondary" type="button"><a href="/posts/create">Create New Post</a></button>
                    </form>
                    <hr>
                    <table class="table table-striped">
                    <tr>   
                        <th>Title</th>
                        <th></th>
                        <th></th>
                    </tr>
                   @foreach ($posts as $post)
                    <tr>
                        <td>{{$post->title}}</td>
                        <td><a href="/posts/{{$post->id}}/edit"><span class="glyphicon glyphicon-pencil"></span>Edit</a></td>
                        <td>
                            {!!Form::open(['action'=>['PostsController@destroy',$post->id],'class'=>'pull-right'])!!}
                            {{Form::hidden('_method','DELETE')}}
                            {{Form::submit('Delete', ['class'=>'btn btn-danger'])}}
                            {!!Form::close()!!}
                        </td>
                    </tr>
                   @endforeach
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
