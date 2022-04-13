<?php

namespace Database\Factories;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\customer>
 */
class customerFactory extends Factory
{         
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */

     
    public function definition()
    {
       // $userIDs = DB::table('logins')->pluck('user_id')->toArray();
      /*   foreach (range(1,50) as $index) {
            DB::table('course_student')->insert([
          
            ]); */
          //  dd($userIDs);
          $users = DB::select('select * from logins');
          $k = array_rand($users);
          $user = $users[$k];
          
  //  dd($user);
        return [
               //'card_number'=>$this->faker->creditCardNumber('Visa', true),
               
                'card_number'=>$user->card_number,
                'first_name'=>$this->faker->firstName(),
                'last_name'=>$this->faker->lastName(),
                'phone_number'=>$this->faker->phoneNumber(),
                'email'=>$this->faker->email(),
                'address'=>$this->faker->address(),
                'date_of_birth'=>$this->faker->dateTimeBetween('1960-01-01', '2012-12-31')
                ,
            
        ];
    }
    
    
}
