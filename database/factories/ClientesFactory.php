<?php

namespace Database\Factories;

use App\Models\Clientes;
use Illuminate\Database\Eloquent\Factories\Factory;

class ClientesFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Clientes::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'cli_nombres' => $this->faker->word,
        'cli_apellidos' => $this->faker->word,
        'cli_cedula' => $this->faker->word,
        'cli_direccion' => $this->faker->word,
        'cli_telefono' => $this->faker->word,
        'cli_correo' => $this->faker->word,
        'cli_estado' => $this->faker->word
        ];
    }
}
