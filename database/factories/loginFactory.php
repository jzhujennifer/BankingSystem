<?php

namespace Database\Factories;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\login>
 */

class loginFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
   
    public function definition()
    {
        
        return [
            'card_number'=>$this->faker->creditCardNumber('Visa', true),
            'password' =>'123456',
        ];
    }
}
