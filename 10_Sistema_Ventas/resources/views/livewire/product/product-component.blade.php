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
                        <a wire:click="$dispatch('delete',{id:{{ $product->id }}, eventName:'destroyProduct'})"
                            class="btn btn-danger">
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



    {{-- @include('products.modal') --}}

    <x-modal modalId="modalProduct" modalTitle="Productos" modalSize="modal-lg">

        <form wire:submit={{ $id == 0 ? 'store' : "update($id)" }}>

            <div class="form-row">

                {{-- ---------------------------------------------------- --}}
                {{-- Start Input Name --}}
                <div class="form-group col-md-7">
                    <label for="name">Nombre:</label>
                    <input wire:model='name' type="text" class="form-control" placeholder="Nombre producto"
                        id="name">
                    @error('name')
                        <div class="alert alert-danger w-100 mt-2">{{ $message }}</div>
                    @enderror
                </div>
                {{-- End Input Name --}}

                {{-- Start Select Category --}}
                <div class="form-group col-md-5">
                    <label for="category_id">Categoria:</label>

                    <select wire:model='category_id' id="category_id" class="form-control">

                        <option value="0">Seleccionar</option>

                    </select>

                    @error('category_id')
                        <div class="alert alert-danger w-100 mt-2">{{ $message }}</div>
                    @enderror
                </div>
                {{-- End Select Category --}}

                {{-- Textarea descripcion --}}
                <div class="form-group col-md-12">
                    <label for="description">Descripcion:</label>

                    <textarea wire:model='description' id="description" class="form-control" rows="3">

                    </textarea>

                    @error('description')
                        <div class="alert alert-danger w-100 mt-2">{{ $message }}</div>
                    @enderror
                </div>

                {{-- Start Input purchase_price precio compra --}}
                <div class="form-group col-md-4">
                    <label for="purchase_price">Precio compra:</label>
                    <input wire:model='purchase_price' type="number" class="form-control" placeholder="Precio compra"
                        id="purchase_price">
                    @error('purchase_price')
                        <div class="alert alert-danger w-100 mt-2">{{ $message }}</div>
                    @enderror
                </div>
                {{-- End Input purchase_price precio compra --}}

                {{-- Start Input minimum_price precio venta --}}
                <div class="form-group col-md-4">
                    <label for="minimum_price">Precio venta:</label>
                    <input wire:model='minimum_price' type="number" class="form-control" placeholder="Precio venta"
                        id="minimum_price">

                    @error('minimum_price')
                        <div class="alert alert-danger w-100 mt-2">{{ $message }}</div>
                    @enderror
                </div>
                {{-- End Input minimum_price precio venta --}}


                {{-- Start Input code_bars codigo barras --}}
                <div class="form-group col-md-4">
                    <label for="code_bars">Codigo barras:</label>
                    <input wire:model='code_bars' type="text" class="form-control" placeholder="Codigo barras"
                        id="code_bars">

                    @error('code_bars')
                        <div class="alert alert-danger w-100 mt-2">{{ $message }}</div>
                    @enderror
                </div>
                {{-- End Input code_bars codigo barras --}}


                {{-- Start Input stock --}}
                <div class="form-group col-md-4">
                    <label for="stock">Stock:</label>
                    <input wire:model='stock' type="number" class="form-control" placeholder="Stock del producto"
                        id="stock">

                    @error('stock')
                        <div class="alert alert-danger w-100 mt-2">{{ $message }}</div>
                    @enderror
                </div>
                {{-- End Input stock --}}

                {{-- Start Input minimum_stock stock minimo --}}
                <div class="form-group col-md-4">
                    <label for="minimum_stock">Stock minimo:</label>
                    <input wire:model='minimum_stock' type="number" class="form-control" placeholder="Stock minimo"
                        id="minimum_stock">

                    @error('minimum_stock')
                        <div class="alert alert-danger w-100 mt-2">{{ $message }}</div>
                    @enderror
                </div>
                {{-- End Input minimum_stock stock minimo --}}

                {{-- Start Input expiration_date fecha vencimiento --}}
                <div class="form-group col-md-4">
                    <label for="expiration_date">Fecha vencimiento:</label>
                    <input wire:model='expiration_date' type="date" class="form-control"
                        placeholder="Fecha vencimiento" id="expiration_date">

                    @error('expiration_date')
                        <div class="alert alert-danger w-100 mt-2">{{ $message }}</div>
                    @enderror
                </div>
                {{-- End Input expiration_date fecha vencimiento --}}

                {{-- Start active Checkbox active --}}
                <div class="form-group col-md-3">

                    <div class="icheck-primary">
                        <input wire:model='active' type="checkbox" id="active">
                        <label for="active">
                            ¿Esta activo?
                        </label>

                    </div>

                    @error('active')
                        <div class="alert alert-danger w-100 mt-2">{{ $message }}</div>
                    @enderror
                </div>
                {{-- End active Checkbox active --}}

                {{-- Input imagen --}}
                <div class="form-group col-md-3">

                    <label for="image">Imagen:</label>
                    <input wire:model='image' type="file" id="image" accept="image/*">

                    @error('image')
                        <div class="alert alert-danger w-100 mt-2">{{ $message }}</div>
                    @enderror
                </div>

                {{-- imagen --}}
                <div class="form-group col-md-6">

                    <img src="" alt="">

                </div>


            </div>

            <hr>
            <button class="btn btn-primary float-right">{{ $id == 0 ? 'Guardar' : 'Editar' }}</button>
        </form>

    </x-modal>

</div>
