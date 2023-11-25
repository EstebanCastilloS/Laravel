@extends('layouts.admin')


@section('content')
    <h2>hola esta es la vista show</h2>

    {{ $member->id }}<br/>
    {{ $member->full_name }}<br/>
    {{ $member->phone }}<br/>
    {{ $member->email }}<br/>
    {{ $member->status}}<br/>
    {{ $member->date_admission }}

    <h2>Fin vista show</h2>
@endsection
