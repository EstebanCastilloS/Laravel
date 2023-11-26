@extends('layouts.admin')

@section('content')

    <h1>Editar Miembro</h1>
    <hr>

    {{-- {!! Form::model($miembro, ['method' => 'PATCH', 'action' => ['MiembrosController@update', $miembro->id]]) !!}
        @include('miembros._form', ['submitButtonText' => 'Actualizar Miembro'])
    {!! Form::close() !!}

    @include('errors.list --}}


@endsection
