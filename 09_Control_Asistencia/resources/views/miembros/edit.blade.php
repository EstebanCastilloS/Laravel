@extends('layouts.admin')

@section('content')
    <div class="content" style="margin-left: 20px">
        <h1>Actualizar datos del Miembro</h1><br>

        <div class="row">
            <div class="col-md-11">
                <div class="card card-outline card-success">

                    <div class="card-header">
                        <h3 class="card-title"><b>Actualizar Datos</b> </h3>
                    </div>

                    <div class="card-body" style="">
                        <form action="{{ route('miembros.update') }}" method="POST" enctype="multipart/form-data">

                            @csrf
                            <div class="row">

                                <div class="col-md-12">

                                    <div class="row">

                                        {{-- Nombres y Apellido --}}
                                        <div class="col-md-6">
                                            <div class="fotm-group">
                                                <label for="">Nombres y Apellido*</label>
                                                <input type="text" name="full_name" value="{{ $member->full_name }}"
                                                    class="form-control" placeholder="Nombre Completo" required>
                                                @error('full_name')
                                                    <small style="color: red">El campo Nombres y Apellido es Requerido</small>
                                                @enderror

                                            </div>
                                        </div>

                                        {{-- Email --}}
                                        <div class="col-md-6">
                                            <div class="fotm-group">
                                                <label for="">Email*</label>
                                                <input type="email" name="email" value = "{{ $member->email }}"
                                                    class="form-control" required>
                                                @error('email')
                                                    <small style="color: red">El campo Email es Requerido</small>
                                                @enderror
                                            </div>
                                        </div>

                                        {{-- Telefono --}}
                                        <div class="col-md-6">
                                            <div class="fotm-group">
                                                <label for="">Telefono*</label>
                                                <input type="text" name="phone" value = "{{ $member->phone }}"
                                                    class="form-control" required>
                                                @error('phone')
                                                    <small style="color: red">El campo Telefono es Requerido</small>
                                                @enderror
                                            </div>
                                        </div>

                                        {{-- Dirección --}}
                                        <div class="col-md-6">
                                            <div class="fotm-group">
                                                <label for="">Dirección*</label>
                                                <input type="text" name="address" value = "{{ $member->address }}"
                                                    class="form-control" required>
                                                @error('address')
                                                    <small style="color: red">El campo Dirección es Requerido</small>
                                                @enderror
                                            </div>
                                        </div>

                                        {{-- Fecha de Nacimiento --}}
                                        <div class="col-md-6">
                                            <div class="fotm-group">
                                                <label for="">Fecha de Nacimiento</label>
                                                <input type="date" name="birthdate" value = "{{ $member->birthdate }}"
                                                    class="form-control" required>
                                                @error('birthdate')
                                                    <small style="color: red">El campo Fecha de Nacimiento es Requerido</small>
                                                @enderror
                                            </div>
                                        </div>

                                        {{-- Género --}}
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="gender">Género</label>
                                                <select id="gender" name="gender" class="form-control">
                                                    <option value="">Selecciona un género</option>
                                                    <option value="Masculino"
                                                        {{ $member->gender == 'Masculino' ? 'selected' : '' }}>Masculino
                                                    </option>
                                                    <option value="Femenino"
                                                        {{ $member->gender == 'Femenino' ? 'selected' : '' }}>Femenino
                                                    </option>
                                                    <option value="Otro">Otro</option>
                                                    <!-- Añade más opciones aquí si es necesario -->
                                                </select>
                                                @error('gender')
                                                    <small style="color: red">El campo Género es Requerido</small>
                                                @enderror
                                            </div>
                                        </div>

                                        {{-- Estado --}}
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="status">Estado</label>
                                                <select id="status" name="status" class="form-control">
                                                    <option value="">Selecciona un estado</option>
                                                    <option value="active"
                                                        {{ $member->status == 'active' ? 'selected' : '' }}>Activo</option>
                                                    <option value="inactive"
                                                        {{ $member->status == 'inactive' ? 'selected' : '' }}>Inactivo
                                                    </option>
                                                    <!-- Añade más opciones aquí si es necesario -->
                                                </select>
                                                @error('status')
                                                    <small style="color: red">El campo Estado es Requerido</small>
                                                @enderror
                                            </div>
                                        </div>

                                        {{-- Ministerio --}}
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="ministry">Ministerio</label>
                                                <select id="ministry" name="ministry" class="form-control">
                                                    <option value="">Selecciona un ministerio</option>
                                                    <option value="Ancianos"
                                                        {{ $member->ministry == 'Ancianos' ? 'selected' : '' }}>Ancianos
                                                    </option>
                                                    <option value="Adultos"
                                                        {{ $member->ministry == 'Adultos' ? 'selected' : '' }}>Adultos
                                                    </option>
                                                    <option value="Jovenes"
                                                        {{ $member->ministry == 'Ancianos' ? 'selected' : '' }}>Jovenes
                                                    </option>
                                                    <option value="Adolescentes"
                                                        {{ $member->ministry == 'Jovenes' ? 'selected' : '' }}>Adolescentes
                                                    </option>
                                                    <option value="Niños"
                                                        {{ $member->ministry == 'Niños' ? 'selected' : '' }}>Niños</option>
                                                    <option value="Intercesion"
                                                        {{ $member->ministry == 'Intercesion' ? 'selected' : '' }}>
                                                        Intercesion</option>
                                                    <option value="Alabanza"
                                                        {{ $member->ministry == 'Alabanza' ? 'selected' : '' }}>Alabanza
                                                    </option>
                                                    <option value="Danza"
                                                        {{ $member->ministry == 'Danza' ? 'selected' : '' }}>Danza</option>
                                                </select>
                                                @error('ministry')
                                                    <small style="color: red">El campo Ministerio es Requerido</small>
                                                @enderror
                                            </div>
                                        </div>

                                        {{-- Fecha de Ingreso --}}
                                        <div class="col-md-6">
                                            <div class="fotm-group">
                                                <label for="">Fecha de Ingreso</label>
                                                <input type="date" name="date_admission"
                                                    value = "{{ $member->date_admission }}" class="form-control">
                                                @error('date_admission')
                                                    <small style="color: red">El campo Fecha de Ingreso es Requerido</small>
                                                @enderror
                                            </div>
                                        </div>

                                        {{-- Fotografía --}}
                                        <div class="col-md-6">
                                            <div class="col-md-6">
                                                <div class="fotm-group">
                                                    <label for="">Fotografía</label>
                                                    <input type="file" name="photo" class="form-control"
                                                        id="file-input" onchange="archivo(event)">
                                                    <center>
                                                        <output>
                                                            @if ($member->photo == '')

                                                                @if ($member->gender == 'Masculino')
                                                                    <img src="{{ asset('images/avatar_hombre_1.jpg') }}" width="150px" alt="">

                                                                @else
                                                                    <img src="{{ asset('images/avatar_mujer.png') }}" width="150px" alt="">

                                                                @endif

                                                            @else
                                                                <center class="pd-1">
                                                                    <img src="{{ asset('storage') . '/' . $member->photo }}" alt=""
                                                                        id="imgSalida" width="200px" height="200px" >
                                                                </center>

                                                            @endif

                                                        </output>
                                                    </center>

                                                </div>
                                            </div>



                                        </div>

                                    </div>
                                </div>
                            </div>

                            <br />
                            <div class="row">
                                <div class="col-md-12">
                                    <button class="btn btn-success " style="margin-right: 10px" type="submit">Actualizar
                                        Registros</button>
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
