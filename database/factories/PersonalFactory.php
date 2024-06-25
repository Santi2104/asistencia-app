<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Personal>
 */
class PersonalFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'nombre' => fake()->name(),
            'apellido' => fake()->lastName(),
            'dni' => $this->faker->unique()->numberBetween(1000,10000),
            'fecha_nacimiento' => $this->faker->date(),
            'turno_id' => $this->faker->numberBetween(1,3),
            'adicionales_id' => $this->faker->numberBetween(1,2),
            'situacion_id' => $this->faker->numberBetween(1,4),
            'legajo' => $this->faker->numberBetween(1000,10000),
        ];
    }
}
