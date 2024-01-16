<x-modal modalId="modalProduct" modalTitle="Productos" modalSize="modal-lg">

    <form wire:submit={{ $id==0 ? "store":"update($id)" }}>
        <div class="form-row">
            <div class="form-group col-12">

                {{-- Input Name --}}
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
