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
                                    <th>Nombre Ministerio</th>
                                    <th>Descripción</th>
                                    <th>Estado</th>
                                    <th>Fecha de Ingreso</th>
                                    <th>Acciones</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($ministries as $ministry)
                                    <tr>
                                        <td>{{ $ministry->id }}</td>
                                        <td>{{ $ministry->name }}</td>
                                        <td>{{ $ministry->description }}</td>
                                        <td>
                                            @if ($ministry->status == 'active')
                                                <button class="btn btn-success btn-sm" style="border-radius: 20px">
                                                    {{ $ministry->status == 'active' ? 'Activado' : 'Desactivado' }}
                                                </button>
                                            @else
                                                <button class="btn btn-danger btn-sm" style="border-radius: 20px">
                                                    {{ $ministry->status == 'active' ? 'Activado' : 'Desactivado' }}
                                                </button>
                                            @endif

                                        </td>
                                        <td>{{ $ministry->date_admission }}</td>
                                        <td>
                                            <a href="{{ route('ministerios.show', $ministry->id) }}" type = "button" class="btn btn-primary btn-sm"><i class="bi bi-eye"></i></a>
                                            <a href="{{ route('ministerios.edit', $ministry->id) }}" type = "button"  class="btn btn-success btn-sm"><i class="bi bi-pencil"></i></a>
                                            <a href="{{ route('ministerios.destroy', $ministry->id) }}" type = "button"  class="btn btn-danger btn-sm"><i class="bi bi-trash"></i></a>

                                            {{-- <form action="{{ route('miembros.destroy', $member->id) }}" method="POST">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-danger btn-sm"><i class="bi bi-trash"></i></button>
                                            </form> --}}

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
