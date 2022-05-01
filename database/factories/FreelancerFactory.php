<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class FreelancerFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = \App\Models\Freelancer::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        // return [
        //     'usuario_id',
        //     'data_registro',
        //     'localizao', 
        //     'descricao', 
        //     'trofeu'

        //     'username' => $this->faker->username(),
        //     'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
        //     'nome' => $this->faker->name(),
        //     'sobrenome' => $this->faker->name(),
        //     'email' => $this->faker->unique()->safeEmail(),
        //     'data_nascimento' => date("Y-m-d"),
        //     'remember_token' => Str::random(10),
        //     'admin' => false,
        //     'status' => true
        // ];
    }
}