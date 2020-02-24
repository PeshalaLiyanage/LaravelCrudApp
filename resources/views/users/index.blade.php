@extends('layouts.app')

@section('content')

    <h1 style="text-align: center">Users</h1>
    @if(count($users) > 0)
        @foreach($users as $user)
            <div class="well">
                <h3><a href="/users/{{$user -> email}}">{{$user -> name}}</a></h3>
                <small>{{$user -> email}}</small>
                <br>
                <div style="float: right; display: flex;margin-top: -57px;">
                    <a class="btn btn-dark" href="/users/{{$user->id}}/edit"> Edit </a>
                    {!! Form::open(['action' => ['UserController@destroy',$user->id], 'method' => 'DELETE']) !!}
                    {{Form::submit('Delete',['class'=>'btn btn-danger'])}}
                    {!! Form::close() !!}
                </div>

            </div>
        @endforeach
        <div class="text-align">
            {{$users -> links()}}
        </div>

    @else
        <p>No Users Found</p>
    @endif

@endsection
