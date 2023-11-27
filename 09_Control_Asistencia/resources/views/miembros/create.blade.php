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
                        <h3 class="card-title"><b>Datos de los miembros</b> </h3>
                    </div>

                    <div class="card-body" style="">
                        <form action="{{ route('miembros.store') }}" method="POST" enctype="multipart/form-data">

                            @csrf
                            <div class="row">

                                <div class="col-md-12">

                                    <div class="row">

                                        {{-- Nombres y Apellido --}}
                                        <div class="col-md-6">
                                            <div class="fotm-group">
                                                <label for="">Nombres y Apellido*</label>
                                                <input type="text" name="full_name" class="form-control"
                                                    placeholder="Nombre Completo" value = "{{ old('full_name') }}" required>
                                                @error('full_name')
                                                    <small style="color: red">El campo Nombres y Apellido es Requerido</small>
                                                @enderror

                                            </div>
                                        </div>

                                        {{-- Email --}}
                                        <div class="col-md-6">
                                            <div class="fotm-group">
                                                <label for="">Email*</label>
                                                <input type="email" name="email" class="form-control" value = "{{ old('email') }}" required>
                                                @error('email')
                                                    <small style="color: red">El campo Email es Requerido</small>
                                                @enderror
                                            </div>
                                        </div>

                                        {{-- Telefono --}}
                                        <div class="col-md-6">
                                            <div class="fotm-group">
                                                <label for="">Telefono*</label>
                                                <input type="text" name="phone" class="form-control" value = "{{ old('phone') }}" required>
                                                @error('phone')
                                                    <small style="color: red">El campo Telefono es Requerido</small>
                                                @enderror
                                            </div>
                                        </div>

                                        {{-- Dirección --}}
                                        <div class="col-md-6">
                                            <div class="fotm-group">
                                                <label for="">Dirección*</label>
                                                <input type="text" name="address" class="form-control" value = "{{ old('address') }}" required>
                                                @error('address')
                                                    <small style="color: red">El campo Dirección es Requerido</small>
                                                @enderror
                                            </div>
                                        </div>

                                        {{-- Fecha de Nacimiento --}}
                                        <div class="col-md-6">
                                            <div class="fotm-group">
                                                <label for="">Fecha de Nacimiento</label>
                                                <input type="date" name="birthdate" class="form-control" value = "{{ old('birthdate') }}" required>
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
                                                    <option value="Masculino" {{ old('gender') == 'Masculino' ? 'selected' : '' }}>Masculino</option>
                                                    <option value="Femenino" {{ old('gender') == 'Femenino' ? 'selected' : '' }}>Femenino</option>
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
                                                    <option value="active" {{ old('status') == 'active' ? 'selected' : '' }}>Activo</option>
                                                    <option value="inactive" {{ old('status') == 'inactive' ? 'selected' : '' }}>Inactivo</option>
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
                                                    <option value="Ancianos" {{ old('ministry') == 'Ancianos' ? 'selected' : '' }}>Ancianos</option>
                                                    <option value="Adultos" {{ old('ministry') == 'Adultos' ? 'selected' : '' }}>Adultos</option>
                                                    <option value="Jovenes" {{ old('ministry') == 'Ancianos' ? 'selected' : '' }}>Jovenes</option>
                                                    <option value="Adolescentes" {{ old('ministry') == 'Jovenes' ? 'selected' : '' }}>Adolescentes</option>
                                                    <option value="Niños" {{ old('ministry') == 'Niños' ? 'selected' : '' }}>Niños</option>
                                                    <option value="Intercesion" {{ old('ministry') == 'Intercesion' ? 'selected' : '' }}>Intercesion</option>
                                                    <option value="Alabanza" {{ old('ministry') == 'Alabanza' ? 'selected' : '' }}>Alabanza</option>
                                                    <option value="Danza" {{ old('ministry') == 'Danza' ? 'selected' : '' }}>Danza</option>
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
                                                <input type="date" name="date_admission" class="form-control" value = "{{ old('date_admission') }}">
                                                @error('date_admission')
                                                    <small style="color: red">El campo Fecha de Ingreso es Requerido</small>
                                                @enderror
                                            </div>
                                        </div>

                                        {{-- Fotografía --}}
                                        <div class="col-md-6">
                                            {{-- <div class="fotm-group">
                                                <label for="">Fotografía</label>
                                                <input type="file" class="form-control">
                                                <output id="list"></output>

                                                <script>
                                                    function archivo(evt) {
                                                        var files = evt.target.files; // FileList object

                                                        // Obtenemos la imagen del campo "file".
                                                        for (var i = 0, f; f = files[i]; i++) {
                                                            //Solo admitimos imágenes.
                                                            if (!f.type.match('image.*')) {
                                                                continue;
                                                            }

                                                            var reader = new FileReader();

                                                            reader.onload = (function(theFile) {
                                                                return function(e) {
                                                                    // Insertamos la imagen
                                                                    document.getElementById("list").innerHTML = ['<img class="thumb" src="', e.target.result,  title="', escape(theFile.name), '"/>'].join('');
                                                                };
                                                            })(f);

                                                            reader.readAsDataURL(f);
                                                        }
                                                    }

                                                    document.getElementById('file').addEventListener('change', archivo, false);
                                                </script>
                                            </div> --}}
                                            <div class="col-md-6">
                                                <div class="fotm-group">
                                                    <label for="">Fotografía</label>
                                                    <input type="file" name="photo" class="form-control"
                                                        id="file-input" onchange="archivo(event)" value = "{{ old('full_name') }}">
                                                    <center><output id="list"></output></center>
                                                    @error('photo')
                                                    <small style="color: red">El campo Fotografía es Requerido</small>
                                                    @enderror
                                                </div>
                                            </div>

                                            <script>
                                                function archivo(evt) {
                                                    var files = evt.target.files; // FileList object

                                                    // Obtenemos la imagen del campo "file".
                                                    for (var i = 0, f; f = files[i]; i++) {
                                                        //Solo admitimos imágenes.
                                                        if (!f.type.match('image.*')) {
                                                            continue;
                                                        }

                                                        var reader = new FileReader();

                                                        reader.onload = (function(theFile) {
                                                            return function(e) {
                                                                // Insertamos la imagen
                                                                document.getElementById("list").innerHTML = ['<img class="thumb" src="', e.target
                                                                    .result, '"width="50%" title="', escape(theFile.name), '"/>'
                                                                ].join('');
                                                            };
                                                        })(f);

                                                        reader.readAsDataURL(f);
                                                    }
                                                }
                                            </script>

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
