<?php

namespace Database\Factories;

use App\Models\Pet;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\Client;

class PetFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = \App\Models\Pet::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $sexo = ['macho', 'fêmea'];
        $random = rand(0, count($sexo) - 1);

        return [
            'pet_name' => $this->faker->lastName(),
            'species' => $this->faker->lastName(),
            'breed' => $this->faker->lastName(),
            'sex' => $sexo[$random],
            'observations' => 'Nada a declarar',
            'client_id' => rand(1, count(Client::all())),
        ];
    }
}
