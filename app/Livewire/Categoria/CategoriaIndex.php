<?php

namespace App\Livewire\Categoria;

use Livewire\Attributes\Layout;
use Livewire\Component;

class CategoriaIndex extends Component
{
    #[Layout('layouts.app')]
    public function render()
    {
        $categorias = \App\Models\Categoria::all();
        return view('livewire.categoria.categoria-index', compact('categorias'));
    }
}
