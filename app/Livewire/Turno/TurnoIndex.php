<?php

namespace App\Livewire\Turno;

use Livewire\Attributes\Layout;
use Livewire\Component;

class TurnoIndex extends Component
{

    #[Layout('layouts.app')]
    public function render()
    {
        $turnos = \App\Models\Turno::all();
        return view('livewire.turno.turno-index', compact('turnos'));
    }
}
