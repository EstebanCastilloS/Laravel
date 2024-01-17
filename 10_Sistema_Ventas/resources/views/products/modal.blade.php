<x-modal modalId="modalProduct" modalTitle="Productos" modalSize="modal-lg">

    <form wire:submit={{ $id == 0 ? 'store' : "update($id)" }}>
        <div class="form-row">
            {{-- Input Name --}}
            <div class="form-group col-md-7">
                <label for="name">Nombre Producto</label>
                <input wire:model='name' type="text" class="form-control" placeholder="Nombre Producto" id="name">
                @error('name')
                    <div class="alert alert-danger w-100 mt-2">
                        {{ $message }}
                    </div>
                @enderror
            </div>

            {{-- Select Category --}}
            <div class="form-group col-md-5">
                <label for="category_id">Categoría</label>
                <select wire:model='category_id' class="form-control" id="category_id">
                    <option value="">Seleccione</option>
                    {{-- @foreach ($categories as $category)
                        <option value="{{ $category->id }}">{{ $category->name }}</option>
                    @endforeach --}}
                    @error('category_id')
                        <div class="alert alert-danger w-100 mt-2">
                            {{ $message }}
                        </div>
                    @enderror
            </div>

            {{-- text area description --}}
            <div class="form-group col-md-12">
                <label for="description">Descripción</label>

                <textarea wire:model='description' class="form-control" id="description" cols="30" rows="10">

                </textarea>
                @error('description')
                    <div class="alert alert-danger w-100 mt-2">
                        {{ $message }}
                    </div>
                @enderror
            </div>

        </div>

        <hr>
        <button class="btn btn-primary float-right">{{ $id == 0 ? 'Guardar' : 'Editar' }}</button>
    </form>

</x-modal>
