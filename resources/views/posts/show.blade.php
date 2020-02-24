@extends('layouts.app')

@section('content')
    <h1 style="text-align: center">{{$post ->title}}</h1>
    <small>Written at {{$post -> created_at}}</small>
    <div>
        {{$post -> body  }}
    </div>

@endsection
