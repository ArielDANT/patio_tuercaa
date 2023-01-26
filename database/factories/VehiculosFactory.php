<?php

namespace Database\Factories;

use App\Models\Vehiculos;
use Illuminate\Database\Eloquent\Factories\Factory;

class VehiculosFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Vehiculos::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'emp_id' => $this->faker->word,
        'veh_marca' => $this->faker->word,
        'veh_modelo' => $this->faker->word,
        'veh_anio' => $this->faker->randomDigitNotNull,
        'veh_kilometraje' => $this->faker->randomDigitNotNull,
        'veh_subtipo' => $this->faker->word,
        'veh_color' => $this->faker->word,
        'veh_estado' => $this->faker->word
        ];
    }
}
