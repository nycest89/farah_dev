@extends('layout.app')

@section('content')
    <h1>Job Description</h1>
    <p>My position in my current company is : {{$position}}</p>
    <p>My task here includes:</p>
    @if (count($job)>0)
        <ul class='list-group'>
            @foreach($job as $task)
                <li class='list-group-item'>{{$task}}</li>
            @endforeach     
        </ul> 
    @endif
@endsection