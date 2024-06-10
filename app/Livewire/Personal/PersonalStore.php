<?php

namespace App\Livewire\Personal;

use App\Models\Adicional;
use App\Models\Categoria;
use App\Models\Personal;
use App\Models\Turno;
use Illuminate\Support\Facades\DB;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Validate;
use Livewire\Component;
use Livewire\WithFileUploads;

class PersonalStore extends Component
{
    use WithFileUploads;

    #[Validate(['required', 'string', 'max:100'])]
    public $nombre;
    #[Validate(['required', 'string', 'max:100'])]
    public $apellido;
    #[Validate(['required', 'date'])]
    public $fecha_nacimiento;
    #[Validate(['required', 'numeric', 'unique:personal,dni'])]
    public $dni;
    #[Validate(['nullable', 'image', 'max:1024'])]
    public $foto;
    public $turnos = [];
    #[Validate(['required', 'exists:turnos,id'])]
    public $turnoId;
    public $categorias;
    public $categoriaId;
    public $adicionales;
    #[Validate(['required', 'exists:adicionales,id'])]
    public $adicionalesId;



    #[Layout('layouts.app')]
    public function render()
    {
        $this->categorias = Categoria::all(['nombre', 'id']);
        $this->adicionales = Adicional::all(['nombre', 'id']);
        return view('livewire.personal.personal-store',[
            'categorias' => $this->categorias,
            'adicionales' => $this->adicionales
        ]);
    }

    public function updatedCategoriaId()
    {
        $this->turnos = Turno::where('categoria_id', $this->categoriaId)->get(['id', 'nombre']);
    }

    public function store()
    {
        $this->validate();

        // dd("Llegamos");
        $url = $this->foto ? $this->foto->store('public') : null;

        Personal::create([
            'nombre' => $this->nombre,
            'apellido' => $this->apellido,
            'dni' => $this->dni,
            'fecha_nacimiento' => $this->fecha_nacimiento,
            'edad' => now()->diffInYears($this->fecha_nacimiento),
            'foto' => $url,
            'turno_id' => $this->turnoId,
            'adicionales_id' => $this->adicionalesId
        ]);
        return redirect()->route('personal.index')->with('status', 'Personal cargado correctamente');
    }
}
