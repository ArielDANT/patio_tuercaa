<?php

namespace Database\Factories;

use App\Models\Empleados;
use Illuminate\Database\Eloquent\Factories\Factory;

class EmpleadosFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Empleados::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'epl_nombres' => $this->faker->word,
        'epl_apellidos' => $this->faker->word,
        'epl_cedula' => $this->faker->word,
        'epl_direccion' => $this->faker->word,
        'epl_correo' => $this->faker->word,
        'epl_estado' => $this->faker->randomDigitNotNull
        ];
    }
}
