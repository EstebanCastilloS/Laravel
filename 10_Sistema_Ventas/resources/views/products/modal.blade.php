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
                    @foreach ($this->categories as $category)
                        <option value="{{ $category->id }}">{{ $category->name }}</option>
                    @endforeach

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
                <input wire:model='purchase_price' min="0" step="any" type="number" class="form-control" placeholder="Precio compra"
                    id="purchase_price">
                @error('purchase_price')
                    <div class="alert alert-danger w-100 mt-2">{{ $message }}</div>
                @enderror
            </div>
            {{-- End Input purchase_price precio compra --}}

            {{-- Start Input sales_price precio venta --}}
            <div class="form-group col-md-4">
                <label for="sales_price">Precio venta:</label>
                <input wire:model='sales_price' min="0" step="any" type="number" class="form-control" placeholder="Precio venta"
                    id="sales_price">

                @error('minimum_price')
                    <div class="alert alert-danger w-100 mt-2">{{ $message }}</div>
                @enderror
            </div>
            {{-- End Input sales_price precio venta --}}


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
                <input wire:model='stock' min="0" type="number" class="form-control" placeholder="Stock del producto"
                    id="stock">

                @error('stock')
                    <div class="alert alert-danger w-100 mt-2">{{ $message }}</div>
                @enderror
            </div>
            {{-- End Input stock --}}

            {{-- Start Input minimum_stock stock minimo --}}
            <div class="form-group col-md-4">
                <label for="minimum_stock">Stock minimo:</label>
                <input wire:model='minimum_stock' min="0" type="number" class="form-control" placeholder="Stock minimo"
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
                     id="expiration_date">

                @error('expiration_date')
                    <div class="alert alert-danger w-100 mt-2">{{ $message }}</div>
                @enderror
            </div>
            {{-- End Input expiration_date fecha vencimiento --}}

            {{-- Start active Checkbox active --}}
            <div class="form-group col-md-3">

                <div class="icheck-primary">
                    <input wire:model='active' type="checkbox" id="active" checked>
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

                @if ($this->image)
                    <img src="{{ $image->temporaryUrl()}}" class="rounded float-right" width="200">
                @endif



            </div>


        </div>

        <hr>
        <button class="btn btn-primary float-right">{{ $id == 0 ? 'Guardar' : 'Editar' }}</button>
    </form>

</x-modal>
