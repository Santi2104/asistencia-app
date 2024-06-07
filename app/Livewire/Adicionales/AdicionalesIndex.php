<?php

namespace App\Livewire\Adicionales;

use Livewire\Attributes\Layout;
use Livewire\Component;

class AdicionalesIndex extends Component
{
    #[Layout('layouts.app')]
    public function render()
    {
        $adicionales = \App\Models\Adicional::all();
        return view('livewire.adicionales.adicionales-index', compact('adicionales'));
    }
}
