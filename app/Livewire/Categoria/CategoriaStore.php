<?php

namespace App\Livewire\Categoria;

use App\Models\Categoria;
use Illuminate\Validation\Rule;
use Livewire\Attributes\Layout;
use Livewire\Component;

class CategoriaStore extends Component
{
    public $nombre;
    public $categoria;
    public function mount($id = null)
    {
        $this->categoria = Categoria::find($id);
    }
    #[Layout('layouts.app')]
    public function render()
    {
        $this->nombre = $this->categoria ? $this->categoria->nombre : $this->nombre;
        return view('livewire.categoria.categoria-store', $this->categoria ? ['categoria' => $this->categoria] : []);
    }

    public function save()
    {
        if($this->categoria) {
            $validated = $this->validate([
                'nombre' => ['required','string','max:100', Rule::unique(\App\Models\Categoria::class)->ignore($this->categoria)]
            ]);

            $this->categoria->update($validated);
            return redirect()->route('categoria.index')->with('status', 'Categoria editada');
        }else{
            $validated = $this->validate([
                'nombre' => ['required','string','max:100', Rule::unique(\App\Models\Categoria::class)]
            ]);

            Categoria::create($validated);
            return redirect()->route('categoria.index')->with('status', 'Categoria creada');

        }
    }
}
