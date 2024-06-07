<?php

namespace App\Livewire\Turno;

use App\Models\Categoria;
use App\Models\Turno;
use Illuminate\Validation\Rule;
use Livewire\Attributes\Layout;
use Livewire\Component;

class TurnoStore extends Component
{
    public $nombre;
    public $turno;
    public $categorias;
    public $categoriaId;
    #[Layout('layouts.app')]
    public function render()
    {
        $this->categorias = Categoria::all(['nombre', 'id']);
        return view('livewire.turno.turno-store', [
            'categorias' => $this->categorias
        ]);
    }

    public function mount(Turno $turno)
    {
        $this->categoriaId = $turno ? $turno->categoria_id : $this->categoriaId;
        $this->nombre = $turno ? $turno->nombre : $this->nombre;
    }

    public function save()
    {

        if ($this->turno) {

            $this->validate([
                'nombre' => ['required', 'string', 'max:100'],
                'categoriaId' => ['required', 'exists:categorias,id']
            ]);
            $this->turno->update([
                'nombre' => $this->nombre,
                'categoria_id' => $this->categoriaId
            ]);
            return redirect()->route('turno.index')->with('status', 'Turno editado');
        } else {

            $this->validate([
                'nombre' => ['required', 'string', 'max:100'],
                'categoriaId' => ['required', 'exists:categorias,id']
            ]);
            Turno::create([
                'nombre' => $this->nombre,
                'categoria_id' => $this->categoriaId
            ]);
            return redirect()->route('turno.index')->with('status', 'Turno creado');
        }
    }
}
