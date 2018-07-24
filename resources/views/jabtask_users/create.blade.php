@extends('layouts.app')
@section('content')
    {!! Form::open(['route' => ['jabtask_users'], 'method' => 'POST']) !!}
        @include('books.shared._form')
        {!! Form::submit('Add') !!}
    {!! Form::close() !!}
@endsection