<?php

namespace App\Livewire\Turno;

use App\Models\Personal;
use Livewire\Component;

class TurnoPersonalCard extends Component
{

    public $persona;

    public function mount(Personal $persona)
    {
        $this->persona = $persona;
    }

    public function render()
    {
        return view('livewire.turno.turno-personal-card', [
            'persona' => $this->persona
        ]);
    }
}
