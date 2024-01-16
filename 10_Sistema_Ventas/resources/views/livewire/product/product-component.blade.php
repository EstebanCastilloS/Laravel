<div>

    <x-card cardTitle="Listado Productos ({{ $this->totalRegistros }})">
        <x-slot:cardTools>
            {{-- data-toggle="modal" data-target="#modalCategory" --}}
            <a href="#" class="btn btn-primary" wire:click='create'>
               <i class="fas fa-plus-circle"></i> Crear Producto
            </a>
        </x-slot:cardTools>

        <x-table>
            <x-slot:thead>
                <th>Id</th>
                <th>Imagen</th>
                <th>Nombre</th>
                <th>Descripción</th>
                <th>Precio Venta</th>
                <th>Stock</th>
                <th>Categoría</th>
                <th>Estado</th>
                <th width="3%">Ver</th>
                <th width="3%">Editar</th>
                <th width="3%">Eliminar</th>
            </x-slot>

            @forelse ($products as $product)
                <tr>
                    <td>{{ $product->id }}</td>
                    <td>Imagen</td>
                    <td>{{ $product->name }}</td>
                    <td>{{ $product->description }}</td>
                    <td>{{ $product->sales_price }}</td>
                    <td>{{ $product->stock }}</td>
                    <td>{{ $product->category_id }}</td>
                    <td>Active</td>
                    <td>
                        <a href="{{ route('products.show', $product) }}" class="btn btn-success">
                            <i class="far fa-eye"></i>
                        </a>
                    </td>
                    <td>
                        <a href="#" wire:click="edit({{ $product->id }})" class="btn btn-primary">
                            <i class="far fa-edit"></i>
                        </a>
                    </td>
                    <td>
                        <a  wire:click="$dispatch('delete',{id:{{ $product->id }}, eventName:'destroyProduct'})" class="btn btn-danger">
                            <i class="far fa-trash-alt"></i>
                        </a>
                    </td>
                </tr>

            @empty
                <tr>
                    <td colspan="11" class="text-center">No hay registros</td>
                </tr>
            @endforelse

        </x-table>

        <x-slot:cardFooter>
            {{ $products->links() }}
        </x-slot>

    </x-card>

    <x-modal modalId="modalCategory" modalTitle="Categorias">

        <form wire:submit={{ $id==0 ? "store":"update($id)" }}>
            <div class="form-row">
                <div class="form-group col-12">
                    <label for="name">Nombre Producto</label>
                    <input wire:model='name' type="text" class="form-control" placeholder="Nombre Categoría">
                    @error('name')
                        <div class="alert alert-danger w-100 mt-2">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
            </div>
            <hr>
            <button class="btn btn-primary float-right">{{ $id==0 ? 'Guardar':'Editar' }}</button>
        </form>

    </x-modal>
</div>
