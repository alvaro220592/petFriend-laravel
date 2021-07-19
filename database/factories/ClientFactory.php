<?php

namespace Database\Factories;

use App\Models\Client;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\Street;

class ClientFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = \App\Models\Client::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'client_name' => $this->faker->firstNameFemale(),
            'client_lastname' => $this->faker->lastName(),
            'address_num' => rand(1, 1000),
            'street_id' => rand(1, count(Street::all())),
        ];
    }
}
