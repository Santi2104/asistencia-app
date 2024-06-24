<?php

namespace Database\Seeders;

use App\Models\Personal;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call(CategoriaSeeder::class);
        $this->call(TurnosSeeder::class);
        $this->call(AdicionalesSeeder::class);
        $this->call(AsistenciaTipoSeeder::class);
        Personal::factory(50)->create();

        User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@mail.com',
        ]);
    }
}
