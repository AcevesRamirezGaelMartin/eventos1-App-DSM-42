<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\usuario>
 */
class UsuariosFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            //
          
        'nombre'=>$this->faker->name(),
        'apellido'=>$this->faker->lastname(),
        'correo'=>$this->faker->unique()->safeEmail(),
        'contrasena'=>$this->faker->password(),
        'telefono'=>$this->faker->numberBetween(100,999),       
        
        ];
    }
}