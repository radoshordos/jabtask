@extends('layouts.app')
@section('content')
    <h1>Poslední události</h1>
    @if(!empty($events))
        <table class="table">
            <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Typ</th>
                <th scope="col">Zdroj</th>
                <th scope="col">Vznik</th>
                <th scope="col">Uzavřeno</th>
                <th colspan="2" scope="col"></th>
            </tr>
            </thead>
            <tbody>
            @foreach($events as $event)
                <tr>
                    <th scope="row">{{ $event->id }}</th>
                    <td>{{ $event->type }}</td>
                    <td>{{ $event->source }}</td>
                    <td>{{ $event->created_at }}</td>
                    <td>{{ $event->close_at }}</td>
                    <td>{!! link_to_route('jabtask_events.edit', 'edit', [$event->id], ['class' => 'btn btn-sm btn-primary']) !!}</td>
                    <td>{!! link_to_route('jabtask_users.show', 'kontakt', [$event->user_id], ['class' => 'btn btn-sm btn-success']) !!}</td>
                </tr>
            @endforeach
            </tbody>
        </table>
    @endempty
@endsection