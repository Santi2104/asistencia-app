<div>
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
        </div>
    </div>
</div>
