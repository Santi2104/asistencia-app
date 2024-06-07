<div>
    <div class="container">

        <a href="{{ route('turno.create') }}" class="btn btn-primary">Crear Turno</a>

        <div class="row justify-content-center pt-3">
            @if (session('status'))
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    {{ session('status') }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            @endif
            <div class="col">
                <div class="card">
                    <div class="card-header">{{ __('Turnos') }}</div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-striped">
                                <thead>
                                    <tr>
                                        <th scope="col">Nombre</th>
                                        <th scope="col">Categoria</th>
                                        <th scope="col">Fecha de creación</th>
                                        <th scope="col">Fecha de modificación</th>
                                        <th scope="col"></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($turnos as $turno)
                                        <tr>
                                            <th>{{ $turno->nombre }}</th>
                                            <th>{{ $turno->categoria->nombre }}</th>
                                            <td>{{ $turno->created_at }}</td>
                                            <td>{{ $turno->updated_at }}</td>
                                            <td><a href="{{ route('turno.create', $turno->id) }}" class="btn btn-primary">
                                                    Editar
                                                </a>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
