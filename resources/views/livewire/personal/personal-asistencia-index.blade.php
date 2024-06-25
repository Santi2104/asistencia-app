<div>
    <div class="row pt-3">
        <div class="col">
            <div class="card">
                <div class="card-header">Historial de asistencias</div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th scope="col">Estado</th>
                                    <th scope="col">Observaciones</th>
                                    <th scope="col">Fecha y hora de carga</th>
                                    <th scope="col">Fecha y hora de modificación</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($asistencias as $asistencia)
                                    <tr class="">
                                        <td>{{ $asistencia->asistenciaTipo->nombre }}</td>
                                        <td>{{ $asistencia->observaciones }}</td>
                                        <td>{{ $asistencia->created_at }}</td>
                                        <td>{{ $asistencia->updated_at }}</td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                    @if ($asistencias->count() >= 5)
                        <a name="show_asistencia" id="show_asistencia" class="btn btn-primary"
                            href="{{ route('personal.asistencia.show', $personal) }}" role="button">Ver
                            mas</a>
                    @endif
                    <a name="show_asistencia" id="show_asistencia" class="btn btn-primary"
                        href="{{ route('personal.asistencia.show', $personal) }}" role="button">Ver
                        mas</a>
                </div>
            </div>

        </div>
    </div>
</div>
