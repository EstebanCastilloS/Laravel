@extends('layouts.admin')

@section('content')
    <div class="content" style="margin-left: 20px">
        <h1>Index - Listado de Miembros</h1>

        <div class="row">
            <div class="col-md-12">
                <div class="card card-outline card-primary">
                    <div class="card-header">
                        <h3 class="card-title"><b>Miembros Regisrados</b> </h3>

                    </div>
                    <div class="card-body" style="display: block">

                        <table class="table table-striped table-bordered">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Nombre y Apellido</th>
                                    <th>Telefono</th>
                                    <th>email</th>
                                    <th>Estado</th>
                                    <th>Agregado</th>
                                    <th>Acciones</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($members as $member)
                                    <tr>
                                        <td>{{ $member->id }}</td>
                                        <td>{{ $member->full_name }}</td>
                                        <td>{{ $member->phone }}</td>
                                        <td>{{ $member->email }}</td>
                                        <td>{{ $member->status == 'active' ? 'Activado' : 'Desactivado'}}</td>
                                        <td>{{ $member->date_admission }}</td>
                                        <td>
                                            <a href="#" class="btn btn-primary btn-sm">Ver</a>
                                            <a href="#" class="btn btn-warning btn-sm">Editar</a>
                                            <a href="#" class="btn btn-danger btn-sm">Eliminar</a>

                                            {{-- <a href="{{ route('members.show', $member->id) }}" class="btn btn-primary btn-sm">Ver</a>
                                            <a href="{{ route('members.edit', $member->id) }}" class="btn btn-warning btn-sm">Editar</a>
                                            <a href="{{ route('members.destroy', $member->id) }}" class="btn btn-danger btn-sm">Eliminar</a> --}}
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                        <div class="">
                            {{ $members->links() }}
                        </div>

                    </div>

                </div>
            </div>
        </div>

        @foreach ($members as $member)
           <h1>{{ $member->full_name }}</h1>
           <h1>{{ $member->email }}</h1>
        @endforeach
    </div>
@endsection
