@extends('layouts.admin')

@section('content')
    <div class="content" style="margin-left: 20px">
        <h1>Actualización del Ministerio</h1><br>

        <div class="row">
            <div class="col-md-11">
                <div class="card card-outline card-success">

                    <div class="card-header">
                        <h3 class="card-title"><b>Revice los Datos</b> </h3>
                    </div>

                    <div class="card-body" style="">
                        <form action="{{ route('ministerios.update', $ministry->id) }}" method="POST">

                            @csrf
                            @method('PUT')
                            <div class="row">

                                <div class="col-md-12">

                                    <div class="row">

                                        {{-- Nombres y Apellido --}}
                                        <div class="col-md-8">
                                            <div class="fotm-group">
                                                <label for="">Nombre del Ministerio*</label>
                                                <input type="text" name="name" class="form-control"
                                                    placeholder="Nombre del Ministerio" value = "{{ $ministry->name }}" required>
                                                @error('name')
                                                    <small style="color: red">El campo Nombre del Ministerio es Requerido</small>
                                                @enderror

                                            </div>
                                        </div>

                                        {{-- Fecha de Inscripción --}}
                                        <div class="col-md-4">
                                            <div class="fotm-group">
                                                <label for="">Fecha de Inscripción</label>
                                                <input type="date" name="date_admission" class="form-control" value = "{{ $ministry->date_admission }}">
                                                @error('date_admission')
                                                    <small style="color: red">El campo Fecha de Ingreso es Requerido</small>
                                                @enderror
                                            </div>
                                        </div>

                                        {{-- Descripción --}}
                                        <div class="col-md-12">
                                            <div class="fotm-group">
                                                <label for="">Desrippción</label>
                                                <textarea class="form-control" name="description" id="description" cols="30" rows="10">
                                                    {!! $ministry->description !!}
                                                </textarea>
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
                                                    <option value="active" {{ $ministry->status == 'active' ? 'selected' : '' }}>Activo</option>
                                                    <option value="inactive" {{ $ministry->status == 'inactive' ? 'selected' : '' }}>Inactivo</option>
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
                                    <button class="btn btn-success " style="margin-right: 10px"
                                        type="submit">Actualizar</button>
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

