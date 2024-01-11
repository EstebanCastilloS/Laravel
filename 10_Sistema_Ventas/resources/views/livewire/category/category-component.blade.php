<div>

    <x-card cardTitle="Listado Categorias ({{ $this->totalRegistros }})" cardFooter="">
        <x-slot:cardTools>
            <a href="" class="btn btn-primary" data-toggle="modal" data-target="#modalCategory">Crear Categoría</a>
        </x-slot:cardTools>

        <x-table>
            <x-slot:thead>
                <th>Id</th>
                <th>Nombre</th>
                <th width="3%">Ver</th>
                <th width="3%">Editar</th>
                <th width="3%">Eliminar</th>
            </x-slot>

            @forelse ($categories as $category)
                <tr>
                    <td>{{ $category->id }}</td>
                    <td>{{ $category->name }}</td>
                    <td>
                        <a href="" class="btn btn-success">
                            <i class="far fa-eye"></i>
                        </a>
                    </td>
                    <td>
                        <a href="" class="btn btn-primary">
                            <i class="far fa-edit"></i>
                        </a>
                    </td>
                    <td>
                        <a href="" class="btn btn-danger">
                            <i class="far fa-trash-alt"></i>
                        </a>
                    </td>
                </tr>

            @empty
                <tr>
                    <td colspan="5" class="text-center">No hay registros</td>
                </tr>
            @endforelse

        </x-table>

    </x-card>

    <x-modal modalId="modalCategory" modalTitle="Categorias">

        <form wire:submit="store">
            <div class="form-row">
                <div class="form-group col-12">
                    <label for="name">Nombre Categoría</label>
                    <input wire:model='name' type="text" class="form-control" placeholder="Nombre Categoría">
                    @error('name')
                        <div class="alert alert-danger w-100 mt-2">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
            </div>
            <hr>
            <button class="btn btn-primary float-right">Guardar</button>
        </form>

    </x-modal>
</div>
