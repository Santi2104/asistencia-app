<?php

use App\Livewire\Adicionales\AdicionalesIndex;
use App\Livewire\Adicionales\AdicionalesStore;
use App\Livewire\Asistencia\ShowAsistenciaPersonal;
use App\Livewire\Categoria\CategoriaIndex;
use App\Livewire\Categoria\CategoriaStore;
use App\Livewire\Home;
use App\Livewire\Personal\PersonalEdit;
use App\Livewire\Personal\PersonalIndex;
use App\Livewire\Personal\PersonalStore;
use App\Livewire\Turno\TurnoIndex;
use App\Livewire\Turno\TurnoPersonalshow;
use App\Livewire\Turno\TurnoStore;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::middleware(['auth'])->group(function () {
    Route::get('/home', Home::class)->name('home');
    Route::get('categorias',CategoriaIndex::class)->name('categoria.index');
    Route::get('categorias/crear/{id?}',CategoriaStore::class)->name('categoria.create');

    Route::get('turnos',TurnoIndex::class)->name('turno.index');
    Route::get('turnos/crear/{turno?}',TurnoStore::class)->name('turno.create');
    Route::get('turnos/{turno}/personal',TurnoPersonalshow::class)->name('turno.show.personal');

    Route::get('adicionales', AdicionalesIndex::class)->name('adicionales.index');
    Route::get('adicionales/crear/{adicionales?}', AdicionalesStore::class)->name('adicionales.create');

    Route::get('personal',PersonalIndex::class)->name('personal.index');
    Route::get('personal/crear',PersonalStore::class)->name('personal.create');
    Route::get('personal/edit/{personal}',PersonalEdit::class)->name('personal.edit');

    Route::get('asistencias/{personal}',ShowAsistenciaPersonal::class)->name('personal.asistencia.show');

});
