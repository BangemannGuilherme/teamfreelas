<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class ContatoFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = \App\Models\Contato::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'usuario_id' => $this->faker->unique()->numberBetween(2, \App\Models\User::count()),
            'celular' => $this->faker->unique()->phoneNumber(),
            'telefone_residencial' => $this->faker->unique()->phoneNumber(),
            'telefone_empresarial' => $this->faker->unique()->phoneNumber()
        ];
    }
}
