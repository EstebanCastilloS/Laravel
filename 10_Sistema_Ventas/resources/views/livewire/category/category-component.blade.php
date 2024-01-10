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

            <tr>
                <td>1</td>
                <td>Esteban</td>
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

        </x-table>

    </x-card>

    <x-modal modalId="modalCategory" modalTitle="Categorias">

        <form wire:submit="store">
            <div class="row">
                <div class="col">

                    <input wire:model='name' type="text" class="form-control" placeholder="Nombre Categoría">
                    @error('name')
                        <div class="alert alert-danger w-100 mt-2">
                            {{ $message }}
                        </div>

                    @enderror
                </div>
            </div>
            <hr>
            <button  class="btn btn-primary float-right">Guardar</button>
        </form>

    </x-modal>
</div>
