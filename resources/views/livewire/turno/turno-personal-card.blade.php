<div class="card text-center">
    @if ($persona->foto)
        <img width="150" height="150" src="{{ Storage::url($persona->foto) }}" alt="foto"
            class="rounded mx-auto d-block float-center">
    @else
        <img width="200" height="200" class="rounded mx-auto d-block float-center"
            src="{{ url('/') }}/image/avatar.jpg" alt="foto">
    @endif
    <div class="card-header bg-transparent border-primary">
        <h5 class="card-title"><strong>{{ $persona->NombreCompleto }}</strong></h5>
    </div>

    <ul class="list-group list-group-flush">
        <li class="list-group-item">
            <p class="card-text">Nacimiento: <strong>{{ $persona->fecha_nacimiento }}</strong> -- Edad:
                <strong>{{ $persona->Edad }}</strong>
            </p>
        </li>
        <li class="list-group-item">
            <p class="card-text">DNI: <strong>{{ $persona->dni }}</strong></p>
        </li>
        <li class="list-group-item">
            <p class="card-text">Adicional: <strong>{{ $persona->adicional->nombre }}</strong></p>
        </li>
        <li class="list-group-item">
            <p class="card-text">Legajo: <strong>{{ $persona->legajo }}</strong></p>
        </li>
    </ul>
    <div class="card-footer bg-light">
        <div class="mb-1">
            <a href="#" class="btn btn-primary">Ver mas</a>
            <a href="#" class="btn btn-primary">pagar</a>
        </div>
    </div>
</div>
