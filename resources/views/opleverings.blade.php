@extends('layouts.app')

@section('content')



    {!! Form::open(['url' => '/tasks/{id}']) !!}
    {!! Form::text('name', '', ['placeholder' => 'Name']) !!}
    {!! Form::submit('Register') !!}
    {!! Form::close() !!}




@endsection