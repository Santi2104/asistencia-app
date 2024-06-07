<?php

namespace App\Livewire\Adicionales;

use App\Models\Adicional;
use Illuminate\Validation\Rule;
use Livewire\Attributes\Layout;
use Livewire\Component;

class AdicionalesStore extends Component
{
    public $adicionales;
    public $nombre;

    public function mount($id = null)
    {
        $this->adicionales = Adicional::find($id);
    }
    #[Layout('layouts.app')]
    public function render()
    {
        $this->nombre = $this->adicionales ? $this->adicionales->nombre : $this->nombre;
        return view('livewire.adicionales.adicionales-store');
    }

    public function save()
    {
        if($this->adicionales) {
            $validated = $this->validate([
                'nombre' => ['required','string','max:100', Rule::unique(\App\Models\Adicional::class)->ignore($this->adicionales)]
            ]);

            $this->adicionales->update($validated);
            return redirect()->route('adicionales.index')->with('status', 'Adicional editada');
        }else{
            $validated = $this->validate([
                'nombre' => ['required','string','max:100', Rule::unique(\App\Models\Adicional::class)]
            ]);

            Adicional::create($validated);
            return redirect()->route('adicionales.index')->with('status', 'Adicional creada');

        }
    }

}
