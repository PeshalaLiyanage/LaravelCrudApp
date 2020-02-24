@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Edit User</h1>
        {!! Form::open(['action' => ['UserController@update',$user->id], 'method' => 'PUT']) !!}
        <div class="form-group">
            {{Form::label('name', 'Name')}}
            {{Form::text('name',$user->name, ['class' => 'form-control','required','placeholder'=>'John'])}}

        </div>
        <div class="form-group">
            {{Form::label('email', 'E-Mail Address')}}
            {{Form::text('email', $user->email, ['class' => 'form-control','required','placeholder'=>'example@gmail.com'])}}
        </div>
        <div class="form-group">
            {{Form::label('address', 'Address')}}
            {{Form::text('address', $user->address, ['class' => 'form-control','required','placeholder'=>'Park Street, London'])}}
        </div>
        <div class="form-group">
            {{Form::label('school', 'School')}}
            {{Form::text('school', $user->school, ['class' => 'form-control','required','placeholder'=>'Oxford'])}}
        </div>
        <div class="form-group">
            {{Form::label('university', 'University')}}
            {{Form::text('university', $user->university, ['class' => 'form-control','required','placeholder'=>'University of Westminster'])}}
        </div>
        {{Form::submit('Submit')}}
        {!! Form::close() !!}
    </div>

@endsection
