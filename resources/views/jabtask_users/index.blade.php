@extends('layouts.app')
@section('content')
    <h1>Aktuální předhled klientů</h1>
    @foreach($users as $user)
        <div class="row">
            <div class="col-sm">
                {{ $user->name_full }}
            </div>
            <div class="col-sm">
                {{ $user->email }}
            </div>
            <div class="col-sm">
                {{ $user->tetefon }}
            </div>
            <div class="col-sm">
                {{ $user->adress_user }}
            </div>
            <div class="col-sm">
                {{ $user->adress_bill }}
            </div>
            <div class="col-sm">
                {!! link_to_route('jabtask_users.show', 'Detail', [$user->id], ['class' => 'btn btn-sm btn-primary']) !!}
            </div>
        </div>
    @endforeach
@endsection