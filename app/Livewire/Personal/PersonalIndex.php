<?php

namespace App\Livewire\Personal;

use App\Models\Personal;
use Livewire\Attributes\Layout;
use Livewire\Component;
use Livewire\WithPagination;

class PersonalIndex extends Component
{

    use WithPagination;

    protected $paginationTheme = 'bootstrap';
    #[Layout('layouts.app')]
    public function render()
    {
        return view('livewire.personal.personal-index', [
            'personal' => Personal::paginate(10)
        ]);
    }
}
