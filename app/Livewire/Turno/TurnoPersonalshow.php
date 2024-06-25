<?php

namespace App\Livewire\Turno;

use App\Models\Personal;
use App\Models\Turno;
use Livewire\Attributes\Layout;
use Livewire\Component;

class TurnoPersonalshow extends Component
{
    public Turno $turno;
    public $personal;
    public $search = '';

    #[Layout('layouts.app')]
    public function render()
    {
        $this->personal = Personal::where('turno_id', $this->turno->id)
                                    ->Orwhere('dni', 'like', '%'.$this->search.'%')
                                    ->get();
        return view('livewire.turno.turno-personalshow', [
            'personal' => $this->personal
        ]);
    }
}
