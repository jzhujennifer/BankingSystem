<?php

namespace Database\Factories;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\contacts>
 */
class contactsFactory extends Factory
{
    
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $customerIDs = DB::table('customers')->pluck('customer_id');
        $accounts = DB::select('select * from accounts');
        $k = array_rand($accounts);
        $account = $accounts[$k];
        return [
           
             'customer_id' =>$this->faker->randomElement($customerIDs),

             'account_number'=>$account->account_number,
             'contact_name'=>$this->faker->randomElement(['rent','bill','mom','dad','car','ride']),
         
         
     ];
    }
}
