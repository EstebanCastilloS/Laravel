@extends('layouts.admin')

@section('content')
    <div class="content">
        <h1>Index - Listado de Miembros</h1>

        @foreach ($members as $member)
           <h1>{{ $member->full_name }}</h1>
           <h1>{{ $member->email }}</h1>
        @endforeach
    </div>
@endsection
