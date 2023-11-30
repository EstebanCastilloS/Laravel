@extends('layouts.admin')

@section('content')
    <div class="content" style="margin-left: 20px">
        <h1>Create -Creación de Nuevo Miembros</h1><br>

        {{-- <script>
            Swal.fire({
                title: "The Internet?",
                text: "That thing is still around?",
                icon: "sucess"
                });
        </script> --}}

        <div class="row">
            <div class="col-md-11">
                <div class="card card-outline card-primary">

                    <div class="card-header">
                        <h3 class="card-title"><b>Datos de los ministerios</b> </h3>
                    </div>

                    <div class="card-body" style="">
                        <form action="{{ route('ministerios.store') }}" method="POST" enctype="multipart/form-data">

                            @csrf
                            <div class="row">

                                <div class="col-md-12">

                                    <div class="row">

                                        {{-- Nombres y Apellido --}}
                                        <div class="col-md-8">
                                            <div class="fotm-group">
                                                <label for="">Nombre del Ministerio*</label>
                                                <input type="text" name="name" class="form-control"
                                                    placeholder="Nombre del Ministerio" value = "{{ old('name') }}" required>
                                                @error('name')
                                                    <small style="color: red">El campo Nombre del Ministerio es Requerido</small>
                                                @enderror

                                            </div>
                                        </div>

                                        {{-- Fecha de Inscripción --}}
                                        <div class="col-md-4">
                                            <div class="fotm-group">
                                                <label for="">Fecha de Inscripción</label>
                                                <input type="date" name="date_admission" class="form-control" value = "{{ old('date_admission') }}">
                                                @error('date_admission')
                                                    <small style="color: red">El campo Fecha de Ingreso es Requerido</small>
                                                @enderror
                                            </div>
                                        </div>

                                        {{-- Descripción --}}
                                        <div class="col-md-12">
                                            <div class="fotm-group">
                                                <label for="">Desrippción</label>
                                                <textarea class="form-control" name="description" id="description" cols="30" rows="10"></textarea>
                                                @error('description')
                                                    <small style="color: red">El campo Nombre del Ministerio es Requerido</small>
                                                @enderror

                                                <script>
                                                    CKEDITOR.replace('description');
                                                </script>

                                            </div>
                                        </div>

                                        {{-- Estado --}}
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="status">Estado</label>
                                                <select id="status" name="status" class="form-control">
                                                    <option value="">Selecciona un estado</option>
                                                    <option value="active" {{ old('status') == 'active' ? 'selected' : '' }}>Activo</option>
                                                    <option value="inactive" {{ old('status') == 'inactive' ? 'selected' : '' }}>Inactivo</option>
                                                    <!-- Añade más opciones aquí si es necesario -->
                                                </select>
                                                @error('status')
                                                    <small style="color: red">El campo Estado es Requerido</small>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <br />
                            <div class="row">
                                <div class="col-md-12">
                                    <button class="btn btn-primary " style="margin-right: 10px"
                                        type="submit">Guardar</button>
                                    <a href="" class="btn btn-danger ">Cancelar</a>
                                </div>
                            </div>

                        </form>



                    </div>

                </div>
            </div>
        </div>



    </div>
@endsection
