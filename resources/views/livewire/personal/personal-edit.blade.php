<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            @if ($errors->any())
                <div class="alert alert-warning alert-dismissible fade show" role="alert">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            @endif
            <a href="{{ route('personal.index') }}" class="btn btn-primary mb-3">Volver</a>
            <div class="card">
                <div class="card-header">{{ __('Editar personal') }}</div>

                <div class="card-body">
                    <form wire:submit.prevent="update">
                        <div class="row">
                            <div class="col">
                                <div class="mb-3">
                                    <label class="form-label">Ingrese nombre</label>
                                    <input type="text" class="form-control" id="nombre" name="nombre"
                                        wire:model.defer="nombre">
                                    @error('nombre')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col">
                                <div class="mb-3">
                                    <label class="form-label">Ingrese apellido</label>
                                    <input type="text" class="form-control" id="apellido" name="apellido"
                                        wire:model.defer="apellido">
                                    @error('apellido')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <div class="mb-3">
                                    <label class="form-label">Ingrese dni</label>
                                    <input type="text" class="form-control" id="dni" name="dni"
                                        wire:model.defer="dni">
                                    @error('dni')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col">
                                <div class="mb-3">
                                    <label class="form-label">Ingrese fecha de nacimiento</label>
                                    <input type="date" class="form-control" id="fecha_nacimiento"
                                        name="fecha_nacimiento" wire:model.defer="fecha_nacimiento">
                                    @error('fecha_nacimiento')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-6 mb-3">
                                <label for="tipo_socio" class="form-label">Seleccione la categoria</label>
                                <select class="form-select" name="categoria" id="categoria"
                                    wire:model.live="categoriaId">
                                    <option selected>{{ $personal->turno->categoria->nombre }}</option>
                                    @foreach ($categorias as $categoria)
                                        <option value="{{ $categoria->id }}">{{ $categoria->nombre }}</option>
                                    @endforeach
                                </select>
                                @error('tipo_socio')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="col-6 mb-3">
                                <label for="tipo_socio" class="form-label">Seleccione el turno</label>
                                <select class="form-select" name="turno" id="turno" wire:model="turnoId">
                                    <option selected>{{ $personal->turno->nombre }}</option>
                                    @foreach ($turnos as $turno)
                                        <option value="{{ $turno->id }}">{{ $turno->nombre }}</option>
                                    @endforeach
                                </select>
                                @error('tipo_socio')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-6 mb-3">
                                <label for="tipo_socio" class="form-label">Seleccione el adicional</label>
                                <select class="form-select" name="adicional" id="adicional"
                                    wire:model="adicionalesId">
                                    <option selected>Seleccione uno</option>
                                    @foreach ($adicionales as $adicional)
                                        <option value="{{ $adicional->id }}">{{ $adicional->nombre }}</option>
                                    @endforeach
                                </select>
                                @error('tipo_socio')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="col-6 mb-3">
                                <label for="" class="form-label">Elija una foto</label>
                                <input type="file" class="form-control" name="foto" aria-describedby="fileHelpId"
                                    wire:model="foto" wire:loading.attr="disabled" accept="image/*>
                                @error('foto')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="mb-3">
                                @if ($personal->foto)
                                    <img width="200" height="200" src="{{ Storage::url($personal->foto) }}"
                                        alt="foto">
                                @else
                                    <img width="200" height="200" src="{{ url('/') }}/image/avatar.jpg"
                                        alt="foto no encontrada">
                                @endif
                            </div>
                        </div>
                        <button type="submit" class="btn btn-info">Guardar</button>
                        </form>
                    @if ($personal->foto)
                        <button type="submit" class="btn btn-warning mt-3" wire:click="borrarFoto">Eliminar foto</button>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
