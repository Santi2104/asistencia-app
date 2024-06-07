<?php

use App\Livewire\Categoria\CategoriaIndex;
use App\Livewire\Categoria\CategoriaStore;
use App\Livewire\Home;
use App\Livewire\Turno\TurnoIndex;
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
});
