<div>
    <div class="container">

        <a href="{{ route('personal.create') }}" class="btn btn-primary">Crear personal</a>

        <div class="row justify-content-center pt-3">
            @if (session('status'))
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    {{ session('status') }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            @endif
            <div class="col">
                <div class="card">
                    <div class="card-header">{{ __('Personal') }}</div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-striped">
                                <thead>
                                    <tr>
                                        <th scope="col">Nombre</th>
                                        <th scope="col">DNI</th>
                                        <th scope="col">Fecha de nacimiento</th>
                                        <th scope="col">Edad</th>
                                        <th scope="col">Categoria</th>
                                        <th scope="col">Turno</th>
                                        <th scope="col">Adicional</th>
                                        <th scope="col"></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($personal as $perso)
                                        <tr>
                                            <th>{{ $perso->NombreCompleto }}</th>
                                            <td>{{ $perso->dni }}</td>
                                            <td>{{ $perso->fecha_nacimiento }}</td>
                                            <td>{{ $perso->Edad }}</td>
                                            <td>{{ $perso->turno->categoria->nombre }}</td>
                                            <td>{{ $perso->turno->nombre }}</td>
                                            <td>{{ $perso->adicional->nombre }}</td>
                                            {{-- <td><a href="{{ route('categoria.create', $categoria->id) }}" class="btn btn-primary">
                                                    Editar
                                                </a>
                                            </td> --}}
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="card-footer">
                        <div class="pagination justify-content-end">
                            {{ $personal->links() }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

