<?php

namespace Database\Factories;

use App\Models\Inventario;
use Illuminate\Database\Eloquent\Factories\Factory;

class InventarioFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Inventario::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'pro_id' => $this->faker->word,
        'ive_fecha' => $this->faker->word,
        'ive_documento' => $this->faker->word,
        'ive_estado' => $this->faker->randomDigitNotNull
        ];
    }
}