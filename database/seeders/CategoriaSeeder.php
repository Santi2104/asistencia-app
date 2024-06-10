<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategoriaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        \App\Models\Categoria::create([
            'nombre' => 'Categoria 1',
        ]);

        \App\Models\Categoria::create([
            'nombre' => 'Categoria 2',
        ]);

        \App\Models\Categoria::create([
            'nombre' => 'Categoria 3',
        ]);
    }
}
