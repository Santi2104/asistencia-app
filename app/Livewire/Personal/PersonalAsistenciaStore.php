<?php

namespace App\Livewire\Personal;

use App\Models\AsistenciaTipo;
use App\Models\Personal;
use Livewire\Attributes\Layout;
use Livewire\Attributes\On;
use Livewire\Component;

class PersonalAsistenciaStore extends Component
{
    public $personal;
    public $asistenciaTipos;
    public $asistenciaTiposId;
    public $observaciones;

    protected function rules()
    {
        return [
            'observaciones' => ['nullable', 'string', 'max:100'],
            'asistenciaTiposId' => ['required', 'exists:asistencia_tipos,id'],
        ];
    }
    #[On('personal-encontrado')]
    public function mostrarResutaldo(Personal $personal)
    {
        $this->personal = $personal;
    }

    #[On('personal-reseteado')]
    public function resetForm()
    {
        $this->personal = null;
        $this->reset('asistenciaTiposId', 'observaciones');
    }

    public function store()
    {
        $this->validate();
        $this->personal->asistencias()->create([
            'personal_id' => $this->personal->id,
            'tipo_asistencia_id' => $this->asistenciaTiposId,
            'observaciones' => $this->observaciones
        ]);
        $this->resetForm();
        $this->dispatch('personal-asistencia-creada');
    }

    #[Layout('layouts.app')]
    public function render()
    {
        $this->asistenciaTipos = AsistenciaTipo::all(['nombre', 'id']);
        return view('livewire.personal.personal-asistencia-store', [
            'asistenciaTipos' => $this->asistenciaTipos
        ]);
    }
}
