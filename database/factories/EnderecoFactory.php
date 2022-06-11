<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class EnderecoFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = \App\Models\Endereco::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'usuario_id' => $this->faker->unique()->numberBetween(2, \App\Models\User::count()),
            'cep' => $this->faker->postcode(),
            'numero' => $this->faker->unique()->buildingNumber(),
            'rua' => $this->faker->streetName(),
            'bairro' => $this->faker->streetName(),
            'cidade' => $this->faker->city(),
            'estado' => $this->faker->city(),
            'pais' =>  $this->faker->country(), 
        ];
    }
}
