<?php

namespace App\Livewire\Asistencia;

use App\Models\Asistencia;
use Livewire\Component;

class AsistenciaPersonalTable extends Component
{

    public $personal;
    public function mount()
    {
        $this->personal = $this->personal;
    }
    public function render()
    {
        return view('livewire.asistencia.asistencia-personal-table', [
            'asistencias' => Asistencia::where('personal_id', $this->personal->id)->paginate(30)
        ]);
    }
}
