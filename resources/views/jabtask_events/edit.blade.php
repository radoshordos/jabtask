@extends('layouts.app')
@section('content')
    {!! Form::model($event, ['route' => ['jabtask_events.update', $event->id], 'method' => 'PUT']) !!}
    <p class="text-center">
        {!! Form::submit('Uzavřít událost', ['class' => 'btn btn-primary']) !!}
    </p>
    {!! Form::close() !!}
@endsection