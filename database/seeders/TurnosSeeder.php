<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TurnosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        \App\Models\Turno::create([
            'categoria_id' => 1,
            'nombre' => 'Turno mañana',
        ]);

        \App\Models\Turno::create([
            'categoria_id' => 1,
            'nombre' => 'Turno Tarde',
        ]);


        \App\Models\Turno::create([
            'categoria_id' => 2,
            'nombre' => 'Turno mañana',
        ]);

        \App\Models\Turno::create([
            'categoria_id' => 2,
            'nombre' => 'Turno Tarde',
        ]);


        \App\Models\Turno::create([
            'categoria_id' => 3,
            'nombre' => 'Turno mañana',
        ]);

        \App\Models\Turno::create([
            'categoria_id' => 3,
            'nombre' => 'Turno Tarde',
        ]);
    }
}
