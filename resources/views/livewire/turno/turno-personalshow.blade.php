<div class="container">
    <a href="{{ route('turno.index') }}" class="btn btn-primary mb-3">Volver</a>
    <div class="row">
        <h1>{{ $turno->categoria->nombre }} - {{ $turno->nombre }}</h1>
    </div>
    {{-- <div class="row">
        <input type="text" class="form-control col" id="search" name="search" wire:model.lazy="search">
    </div> --}}
    <div class="row row-cols-1 row-cols-md-4 g-4 pt-3">
        @foreach ($personal as $perso)
            <div class="col">
                @livewire('turno.turno-personal-card', ['persona' => $perso], key($perso->id))
            </div>
        @endforeach
    </div>
</div>
