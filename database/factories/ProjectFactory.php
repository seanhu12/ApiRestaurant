<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class ProjectFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            //
            'name' => fake()->name(),
            'type'=>'',
            'code'=>$this->faker->countryCode,
            'phase'=>'Inicio',
            'status'=>'Formulación',
            'problem_identified'=>$this->faker->text,
            'general_objective'=>$this->faker->text,
            'start_date'=>$this->faker->date,
            'end_date'=>$this->faker->date,
        ];
    }
}
