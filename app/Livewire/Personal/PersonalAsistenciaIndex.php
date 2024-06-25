<?php

namespace App\Livewire\Personal;

use Livewire\Component;

class PersonalAsistenciaIndex extends Component
{

    public $personal;
    public $asistencias;

    public function mount($personal = null)
    {
        $this->personal = $personal;
    }
    public function render()
    {
        $this->asistencias = $this->personal->asistencias;
        return view('livewire.personal.personal-asistencia-index');
    }
}
