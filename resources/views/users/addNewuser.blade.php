@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Add New User</h1>
        {!! Form::open(['action' => 'UserController@store', 'method' => 'POST']) !!}
        <div class="form-group">
            {{Form::label('name', 'Name')}}
            {{Form::text('name', '', ['class' => 'form-control','required','placeholder'=>'John'])}}

        </div>
        <div class="form-group">
            {{Form::label('email', 'E-Mail Address')}}
            {{Form::text('email', '', ['class' => 'form-control','required','placeholder'=>'example@gmail.com'])}}
        </div>
        <div class="form-group">
            {{Form::label('address', 'Address')}}
            {{Form::text('address', '', ['class' => 'form-control','required','placeholder'=>'Park Street, London'])}}
        </div>
        <div class="form-group">
            {{Form::label('school', 'School')}}
            {{Form::text('school', '', ['class' => 'form-control','required','placeholder'=>'Oxford'])}}
        </div>
        <div class="form-group">
            {{Form::label('university', 'University')}}
            {{Form::text('university', '', ['class' => 'form-control','required','placeholder'=>'University of Westminster'])}}
        </div>

        <div class="form-group">
            {{Form::label('password', 'Password')}}
            {{Form::password('password', ['class' => 'form-control','required','placeholder'=>'********'])}}
        </div>
        <div class="form-group">
            {{Form::label('password_confirmation', 'Confirm Password')}}
            {{Form::password('password_confirmation', ['class' => 'form-control','required'])}}
        </div>

        {{Form::submit('Submit')}}
        {!! Form::close() !!}
    </div>

@endsection
