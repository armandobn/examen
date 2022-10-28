<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class EmpleadoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            //
            'nombre' => $this->faker->word(),
            'apellidos' => $this->faker->lastName(),
            'correo' => $this->faker->unique()->safeEmail(),
            'salario_diario' => $this->faker->randomElement(['400', '600', '700']),
            'puesto' => $this->faker->randomElement(['Desarrollador','Recursos Humanos','Gerente']),
            'estatus' => $this->faker->randomElement(['Activo','Inactivo'])
        ];
    }
}
