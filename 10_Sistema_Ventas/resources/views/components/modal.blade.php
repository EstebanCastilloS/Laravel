@props(['modalTitle' => '', 'modalId' => '', 'modalSize' => ''])
<!-- Modal -->
<div wire:ignore.self class="modal fade" id="{{ $modalId }}" data-backdrop="static" data-keyboard="false" tabindex="-1"
    aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="staticBackdropLabel">{{ $modalTitle }}</h5>
                <button type="button" class="btn btn-secondary" data-dismiss="modal">X</button>
            </div>
            <div class="modal-body">
                {{ $slot }}
            </div>
            {{-- <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Understood</button>
            </div> --}}
        </div>
    </div>
</div>
