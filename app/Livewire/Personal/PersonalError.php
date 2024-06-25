<?php

namespace App\Livewire\Personal;

use Livewire\Attributes\Layout;
use Livewire\Attributes\On;
use Livewire\Component;

class PersonalError extends Component
{
    public $mostrarError = false;
    public $personal;

    #[On('personal-duplicado')]
    public function mostrarError($personal)
    {
        $this->personal = $personal;
        $this->mostrarError = true;
    }
    #[Layout('layouts.app')]
    public function render()
    {
        return view('livewire.personal.personal-error');
    }
}
