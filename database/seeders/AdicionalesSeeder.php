<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AdicionalesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        \App\Models\Adicional::create([
            'nombre' => 'Sin adicional',
        ]);

        \App\Models\Adicional::create([
            'nombre' => 'Con adicional',
        ]);
    }
}
