<?php

namespace Database\Factories;

use App\Models\InventarioDet;
use Illuminate\Database\Eloquent\Factories\Factory;

class InventarioDetFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = InventarioDet::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'ive_id' => $this->faker->word,
        'veh_id' => $this->faker->word,
        'ivd_cantidad' => $this->faker->randomDigitNotNull,
        'ivd_vu' => $this->faker->randomDigitNotNull,
        'ivd_estado' => $this->faker->word
        ];
    }
}
