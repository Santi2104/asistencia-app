<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-4">
            <div class="card">
                <div class="card-header bg-secondary border-secondary text-center text-white">{{ __('Buscar personal por DNI') }}</div>

                <div class="card-body">
                    <livewire:personal.personal-search />
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col">
            <livewire:personal.personal-asistencia-store />
        </div>
    </div>
</div>
