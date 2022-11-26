<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class consumiblesFactory extends Factory
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
            'sillas'=>$this->faker->numberBetween(1,100),
            'mesas'=>$this->faker->numberBetween(1,50),
            'comida'=>$this->faker->numberBetween(1,300),
            'bebidas'=>$this->faker->numberBetween(1,500),
            'decoraciones'=>$this->faker->numberBetween(1,100), 
    
            //'id_eventos'=>$this->faker->id(),//
        
        
        
        
        ];
    }
}
