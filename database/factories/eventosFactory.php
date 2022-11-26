<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class eventosFactory extends Factory
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
            'nombr_evento'=>$this->faker->name(),
           // 'id_local'=>$this->faker->id(),
            'invitaciones'=>$this->faker->rnumberBetween(1,1000),
            'fecha'=>$this->faker->date(),
            'horario'=>$this->faker->lapse(), 
            'ubicacion'=>$this->faker->text(),
            //'id_usuarios'=>$this->faker->id(),   
       
       
        ];
    }
}
