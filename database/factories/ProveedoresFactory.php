<?php

namespace Database\Factories;

use App\Models\Proveedores;
use Illuminate\Database\Eloquent\Factories\Factory;

class ProveedoresFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Proveedores::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'pro_nombres' => $this->faker->word,
        'pro_apellidos' => $this->faker->word,
        'pro_direccion' => $this->faker->word,
        'pro_telefono' => $this->faker->word,
        'pro_correo' => $this->faker->word,
        'pro_cedula' => $this->faker->word,
        'pro_descripcion' => $this->faker->word,
        'pro_estado' => $this->faker->word
        ];
    }
}
