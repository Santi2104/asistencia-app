<?php

namespace App\Livewire\Personal;

use App\Models\Personal;
use Livewire\Attributes\Layout;
use Livewire\Attributes\On;
use Livewire\Component;

class PersonalError extends Component
{
    public $mostrarError = false;
    public $personalError;

    #[On('personal-duplicado')]
    public function mostrarError($personal_id)
    {
        $this->personalError = $personal_id;
        $this->mostrarError = true;
    }

    #[On('personal-reseteado')]
    public function ocultarError()
    {
        $this->reset('mostrarError', 'personalError');
    }
    #[Layout('layouts.app')]
    public function render()
    {
        return view('livewire.personal.personal-error');
    }
}
