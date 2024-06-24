<?php

namespace App\Livewire\Personal;

use App\Models\Personal;
use Livewire\Attributes\Layout;
use Livewire\Attributes\On;
use Livewire\Component;

class PersonalSearch extends Component
{
    public $dni;
    public $resultado;

    protected function rules()
    {
        return [
            'dni' => 'required'
        ];
    }

    public function buscar()
    {
        $this->validate();
        $this->resultado = Personal::where('dni', $this->dni)->first();


        if($this->resultado == null)
        {
            session()->flash('warning', 'No se encontro un personal con el dni enviado');
            return;
        }
        $this->dispatch('personal-encontrado', personal: $this->resultado);

    }

    #[On('personal-asistencia-creada')]
    public function asistenciaCreada()
    {
        session()->flash('success', 'Asistencia guardada con exito');
        $this->limpiar();
        return;
    }

    public function limpiar()
    {
        $this->reset('dni', 'resultado');
        $this->dispatch('personal-reseteado');
    }

    #[Layout('layouts.app')]
    public function render()
    {
        return view('livewire.personal.personal-search');
    }
}
