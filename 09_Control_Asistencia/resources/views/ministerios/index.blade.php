@extends('layouts.admin')

@section('content')
    <div class="content" style="margin-left: 20px">
        <h1>Index - Listado de Ministerios</h1>
        @if ($mensaje = Session::get('mensaje'))
            <script>
                Swal.fire({
                    title: "Buena Trabajo",
                    text: "{{ $mensaje }}",
                    icon: "success"
                    });
            </script>
        @endif

        <div class="row">
            <div class="col-md-12">
                <div class="card card-outline card-primary">
                    <div class="card-header">
                        <h3 class="card-title"><b>Ministerios Regisrados</b> </h3>
                    </div>
                    <div class="card-tools">
                        <a href="{{ route('ministerios.create') }}" class="btn btn-primary">
                            <i class="bi bi-file-plus"></i>Agregar Ministerio
                        </a>
                    </div>
                    <div class="card-body" style="display: block">

                        {{-- dataTable inicio --}}

                        <table id="example1" class="table table-bordered table-striped">
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
                                        <td>
                                            @if ($member->status == 'active')
                                                <button class="btn btn-success btn-sm" style="border-radius: 20px">
                                                    {{ $member->status == 'active' ? 'Activado' : 'Desactivado' }}
                                                </button>
                                            @else
                                                <button class="btn btn-danger btn-sm" style="border-radius: 20px">
                                                    {{ $member->status == 'active' ? 'Activado' : 'Desactivado' }}
                                                </button>
                                            @endif

                                        </td>
                                        <td>{{ $member->date_admission }}</td>
                                        <td>
                                            <a href="{{ route('miembros.show', $member->id) }}" type = "button" class="btn btn-primary btn-sm"><i class="bi bi-eye"></i></a>
                                            <a href="{{ route('miembros.edit', $member->id) }}" type = "button"  class="btn btn-success btn-sm"><i class="bi bi-pencil"></i></a>
                                            {{-- <a href="{{ route('miembros.destroy', $member->id) }}" type = "button"  class="btn btn-danger btn-sm"><i class="bi bi-trash"></i></a> --}}
                                            <form action="{{ route('miembros.destroy', $member->id) }}" method="POST">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-danger btn-sm"><i class="bi bi-trash"></i></button>
                                            </form>

                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>


                    </div>

                </div>
            </div>
        </div>


    </div>
@endsection
