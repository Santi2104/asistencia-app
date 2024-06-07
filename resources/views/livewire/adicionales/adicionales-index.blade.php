<div>
    <div class="container">

        <a href="{{ route('adicionales.create') }}" class="btn btn-primary">Crear Adicional</a>

        <div class="row justify-content-center pt-3">
            @if (session('status'))
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    {{ session('status') }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            @endif
            <div class="col">
                <div class="card">
                    <div class="card-header">{{ __('Adicionales') }}</div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-striped">
                                <thead>
                                    <tr>
                                        <th scope="col">Nombre</th>
                                        <th scope="col">Fecha de creación</th>
                                        <th scope="col">Fecha de modificación</th>
                                        <th scope="col"></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($adicionales as $adicional)
                                        <tr>
                                            <th>{{ $adicional->nombre }}</th>
                                            <td>{{ $adicional->created_at }}</td>
                                            <td>{{ $adicional->updated_at }}</td>
                                            {{-- <td><a href="{{ route('adicional.create', $adicional->id) }}" class="btn btn-primary">
                                                    Editar
                                                </a>
                                            </td> --}}
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
