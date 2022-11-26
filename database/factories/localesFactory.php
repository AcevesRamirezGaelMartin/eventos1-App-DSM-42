<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class localesFactory extends Factory
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
            'nombre_local'=>$this->faker->name(),
           // 'id_usuarios'=>$this->faker->id(),
            'ubicacion'=>$this->faker->unique()->text(),
            'telefono'=>$this->faker->numberBetween(100,999),
            'precio'=>$this->faker->numberBetween(1,10000), 
            'capacidad'=>$this->faker->numberBetween(1,500),
            'tamano'=>$this->faker->text(),


       
       
       
       
        ];
    }
}
