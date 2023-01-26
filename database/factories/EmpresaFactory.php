<?php

namespace Database\Factories;

use App\Models\Empresa;
use Illuminate\Database\Eloquent\Factories\Factory;

class EmpresaFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Empresa::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'emp_nombre' => $this->faker->word,
        'emp_ruc' => $this->faker->word,
        'emp_telefono' => $this->faker->word,
        'emp_direccion' => $this->faker->word,
        'emp_correo' => $this->faker->word
        ];
    }
}
