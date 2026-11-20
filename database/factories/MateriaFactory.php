<?php

namespace Database\Factories;

use App\Models\Materia;
use App\Models\Maestro;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Materia>
 */
class MateriaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'nombre_clase' => $this->faker->word(),
            'codigo' => $this->faker->unique()->bothify("MAE-###"),
            'descripcion' => $this->faker->sentence(),
            'maestro_id' => Maestro::factory(),
            'fecha_imparticion' => $this->faker->date(),
        ];
    }
}
