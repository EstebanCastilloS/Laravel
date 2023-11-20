@extends('layouts.admin')

@section('content')
    <div class="content" style="margin-left: 20px">
        <h1>Create -Creación de Nuevo Miembros</h1><br>

        <div class="row">
            <div class="col-md-11">
                <div class="card card-outline card-primary">

                    <div class="card-header">
                        <h3 class="card-title"><b>Datos de los miembros</b> </h3>
                    </div>

                    <div class="card-body" style="">
                        <div class="row">

                            <div class="col-md-12">

                                <div class="row">

                                    {{-- Nombres y Apellido --}}
                                    <div class="col-md-6">
                                        <div class="fotm-group">
                                            <label for="">Nombres y Apellido</label>
                                            <input type="text" class="form-control">
                                        </div>
                                    </div>

                                    {{-- Email --}}
                                    <div class="col-md-6">
                                        <div class="fotm-group">
                                            <label for="">Email</label>
                                            <input type="text" class="form-control">
                                        </div>
                                    </div>

                                    {{-- Telefono --}}
                                    <div class="col-md-6">
                                        <div class="fotm-group">
                                            <label for="">Telefono</label>
                                            <input type="text" class="form-control">
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="fotm-group">
                                            <label for="">Dirección</label>
                                            <input type="text" class="form-control">
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="fotm-group">
                                            <label for="">Fecha de Nacimiento</label>
                                            <input type="date" class="form-control">
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="gender">Género</label>
                                            <select id="gender" name="gender" class="form-control">
                                                <option value="">Selecciona un género</option>
                                                <option value="Masculino">Masculino</option>
                                                <option value="Femenino">Femenino</option>
                                                <option value="Otro">Otro</option>
                                                <!-- Añade más opciones aquí si es necesario -->
                                            </select>
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="status">Estado</label>
                                            <select id="status" name="status" class="form-control">
                                                <option value="">Selecciona un estado</option>
                                                <option value="active">Activo</option>
                                                <option value="inactive">Inactivo</option>
                                                <!-- Añade más opciones aquí si es necesario -->
                                            </select>
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="ministry">Ministerio</label>
                                            <select id="ministry" name="ministry" class="form-control">
                                                <option value="">Selecciona un ministerio</option>
                                                <option value="Ancianos">Ancianos</option>
                                                <option value="Adultos">Adultos</option>
                                                <option value="Jovenes">Jovenes</option>
                                                <option value="Adolescentes">Adolescentes</option>
                                                <option value="Niños">Niños</option>
                                                <option value="Intercesion">Intercesion</option>
                                                <option value="Alabanza">Alabanza</option>
                                                <option value="Danza">Danza</option>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="fotm-group">
                                            <label for="">Fecha de Ingreso</label>
                                            <input type="date" class="form-control">
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="fotm-group">
                                            <label for="">Fotografía</label>
                                            <input type="file" class="form-control">
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <br/>
                        <div class="row">
                            <div class="col-md-12">
                                <button class="btn btn-primary " style="margin-right: 10px">Guardar</button>
                                <button class="btn btn-danger">Cancelar</button>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>



    </div>
@endsection
