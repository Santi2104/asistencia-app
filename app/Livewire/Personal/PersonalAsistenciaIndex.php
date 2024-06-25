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
        // $this->asistencias = $this->personal->asistencias;
        $this->asistencias = $this->personal->asistencias()->limit(5)->orderBy('created_at', 'desc')->get();
        return view('livewire.personal.personal-asistencia-index');
    }
}
