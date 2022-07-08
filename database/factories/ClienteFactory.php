<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class ClienteFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = \App\Models\Cliente::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [   
            'user_id' =>  $this->faker->unique()->numberBetween(2, \App\Models\User::count()),
            'data_registro' => $this->faker->date("Y-m-d"),
            'empresa_id' => null, 
        ];
    }
}