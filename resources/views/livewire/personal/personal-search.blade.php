<div>
    @if (session()->has('warning'))
        <div class="alert alert-warning alert-dismissible fade show" role="alert">
            <h5>{{ session('warning') }}</h5>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif
    @if (session()->has('success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            <h5>{{ session('success') }}</h5>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif
    <div class="mb-3">
        <label class="form-label">Ingrese un numero de documento</label>
        <input type="text" class="form-control" id="dni" name="dni" wire:model="dni" wire:keydown.enter="buscar">
        @error('dni')
            <span class="error text-danger">{{ $message }}</span>
        @enderror
    </div>
    <div class="d-grid gap-2 d-sm-flex justify-content-sm-center">
        <button class="btn btn-primary" wire:click="buscar" wire:loading.attr="disabled">Buscar</button>
        <button class="btn btn-outline-info" wire:click="limpiar">Limpiar
            formulario</button>
    </div>
</div>
