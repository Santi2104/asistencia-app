<?php

namespace App\Livewire\Asistencia;

use App\Models\Personal;
use Livewire\Attributes\Layout;
use Livewire\Component;

class ShowAsistenciaPersonal extends Component
{

    public Personal $personal;


    #[Layout('layouts.app')]
    public function render()
    {
        return view('livewire.asistencia.show-asistencia-personal');
    }
}
