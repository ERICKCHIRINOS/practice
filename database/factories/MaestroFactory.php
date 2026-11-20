<?php

namespace Database\Factories;

use App\Models\Maestro;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Maestro>
 */
class MaestroFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'nombre' => $this->faker->name(),
            'email' => $this->faker->unique()->safeEmail(),
            'telefono' => $this->faker->phoneNumber(),
            'titulo' => $this->faker->word(),
            'fecha_nacimiento' => $this->faker->date(),
            'estado' => $this->faker->boolean(),
        ];
    }
}
