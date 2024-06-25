<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SituacionesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        \App\Models\Situacion::create([
            'nombre' => 'planta',
        ]);

        \App\Models\Situacion::create([
            'nombre' => 'pem',
        ]);

        \App\Models\Situacion::create([
            'nombre' => 'upa',
        ]);

        \App\Models\Situacion::create([
            'nombre' => 'no escalafonado',
        ]);
    }
}
