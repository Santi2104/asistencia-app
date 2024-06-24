<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AsistenciaTipoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        \App\Models\AsistenciaTipo::create([
            'nombre' => 'presente',
        ]);

        \App\Models\AsistenciaTipo::create([
            'nombre' => 'permisio',
        ]);

        \App\Models\AsistenciaTipo::create([
            'nombre' => 'dia no trabajado',
        ]);

        \App\Models\AsistenciaTipo::create([
            'nombre' => 'certificado',
        ]);

        \App\Models\AsistenciaTipo::create([
            'nombre' => 'apercibimiento',
        ]);

        \App\Models\AsistenciaTipo::create([
            'nombre' => 'ausente',
        ]);
    }
}
