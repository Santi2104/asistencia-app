<?php

namespace App\Livewire\Personal;

use App\Models\Adicional;
use App\Models\Categoria;
use App\Models\Personal;
use App\Models\Turno;
use Illuminate\Support\Facades\Storage;
use Illuminate\Validation\Rule;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Validate;
use Livewire\Component;
use Livewire\WithFileUploads;

class PersonalEdit extends Component
{
    use WithFileUploads;

    public $personal;
    public $nombre;
    public $apellido;
    public $fecha_nacimiento;
    public $dni;
    public $foto;
    public $turnos = [];
    public $turnoId;
    public $categorias;
    public $categoriaId;
    public $adicionales;
    public $adicionalesId;

    protected function rules()
    {
        return [
            'nombre' => ['required', 'string', 'max:100'],
            'apellido' => ['required', 'string', 'max:100'],
            'fecha_nacimiento' => ['required', 'date'],
            'dni' => ['required', 'numeric', Rule::unique(Personal::class)->ignore($this->personal->dni, 'dni')],
            'turnoId' => ['required', 'exists:turnos,id'],
            'adicionalesId' => ['required', 'exists:adicionales,id'],
        ];
    }

    public function mount(Personal $personal)
    {
        $this->personal = $personal;
        $this->nombre = $personal->nombre;
        $this->apellido = $personal->apellido;
        $this->fecha_nacimiento = $personal->fecha_nacimiento;
        $this->dni = $personal->dni;
        $this->foto = $personal->foto;
        $this->turnoId = $personal->turno_id;
        $this->categoriaId = $personal->turno->categoria_id;
        $this->adicionalesId = $personal->adicionales_id;
    }

    public function updatedCategoriaId()
    {
        $this->turnos = Turno::where('categoria_id', $this->categoriaId)->get(['id', 'nombre']);
    }

    #[Layout('layouts.app')]
    public function render()
    {
        $this->categorias = Categoria::all(['nombre', 'id']);
        $this->adicionales = Adicional::all(['nombre', 'id']);
        return view('livewire.personal.personal-edit');
    }

    public function update()
    {
        $this->validate();

        if($this->foto instanceof \Illuminate\Http\UploadedFile){
            if($this->personal->foto){
                Storage::delete($this->personal->foto);
            }
            $url = $this->foto->store('public');
        }else{
            $url = $this->personal->foto;
        }

        $this->personal->update([
            'nombre' => $this->nombre,
            'apellido' => $this->apellido,
            'dni' => $this->dni,
            'fecha_nacimiento' => $this->fecha_nacimiento,
            'foto' => $url,
            'turno_id' => $this->turnoId,
            'adicionales_id' => $this->adicionalesId
        ]);

        return redirect()->route('personal.index')->with('status', 'Personal cargado correctamente');
    }

    public function borrarFoto()
    {
        Storage::delete($this->personal->foto);
        $this->personal->update([
            'foto' => null
        ]);

        return redirect()->route('personal.edit', $this->personal)->with('status', 'Foto borrada correctamente');
    }
}
