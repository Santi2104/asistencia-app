<div class="container">
    @if ($personal)
        <div class="row justify-content-center pt-3">
            <div class="col-8">
                <div class="card">
                    <div class="card-header text-center fs-2">{{ $personal->NombreCompleto }}</div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col">
                                <h4 class="card-title text-center">DNI:</h4>
                                <p class="card-text text-center fw-bold border-bottom">{{ $personal->dni }}</p>
                                <h4 class="card-title text-center">Fecha de nacimiento:</h4>
                                <p class="card-text text-center fw-bold border-bottom">{{ $personal->fecha_nacimiento }}
                                </p>
                                <h4 class="card-title text-center">Turno:</h4>
                                <p class="card-text text-center fw-bold border-bottom">{{ $personal->turno->nombre }}
                                </p>
                                <h4 class="card-title text-center">Adicional:</h4>
                                <p class="card-text text-center fw-bold border-bottom"">
                                    {{ $personal->adicional->nombre }}</p>
                            </div>
                            <div class="col">
                                <div class="row">
                                    <div class="col">
                                        <div class="mb-2">
                                            <label class="form-label fw-bold">Fecha de hoy</label>
                                            <input type="date" class="form-control" id="fecha" name="fecha"
                                                value="{{ date('Y-m-d') }}" disabled>
                                        </div>
                                    </div>
                                </div>
                                {{-- <div class="row">
                                    <div class="col"></div>
                                        <div class="mb-2">
                                            <label class="form-label fw-bold">Hora de entrada</label>
                                            <input type="time" class="form-control" id="entrada" name="entrada"
                                                value="{{ date('H:i') }}" disabled>
                                        </div>
                                </div> --}}
                                <div class="row">
                                    <div class="col">
                                        <div class="mb-2"></div>
                                        <label class="form-label fw-bold">Condición</label>
                                        <select class="form-select" name="asistencia_tipo" id="asistencia_tipo"
                                            wire:model.live="asistenciaTiposId">
                                            <option selected>Seleccione una</option>
                                            @foreach ($asistenciaTipos as $asis)
                                                <option value="{{ $asis->id }}">{{ $asis->nombre }}</option>
                                            @endforeach
                                        </select>
                                        @error('asistenciaTiposId')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col">
                                        <div class="mb-2">
                                            <label class="form-label fw-bold">Observaciones</label>
                                            <textarea class="form-control" id="observaciones" name="observaciones" wire:model.defer="observaciones" rows="3"></textarea>
                                        </div>
                                    </div>
                                </div>
                                <div class="row"></div>
                                <div class="col">
                                    <button class="btn btn-primary" wire:click="store" wire:loading.attr="disabled"
                                        wire:confirm="¿Está seguro de guardar esta asistencia?">Guardar</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
</div>
</div>
</div>
@endif
</div>
