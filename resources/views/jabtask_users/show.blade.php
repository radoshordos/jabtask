@extends('layouts.app')
@section('content')
    <div>Celé jméno: {{ $user->name_full }}</div>
    <div>Telefon: {{ $user->email }}</div>
    <div>Email: {{ $user->tetefon }}</div>
    <div>Adresa klienta: {{ $user->adress_user }}</div>
    <div>Adresa fakturační: {{ $user->adress_bill }}</div>
    {!! link_to_route('jabtask_users.index', 'Přehled klientů', null, ['class' => 'btn btn-primary']) !!}
@endsection