<?php

namespace Database\Factories;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\account>
 */
class accountFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
       // $customerIDs = DB::table('customers')->pluck('customer_id')->toArray();
       $customers = DB::select('select * from customers');
       $k = array_rand($customers);
       $customer = $customers[$k];
        return [

                'account_number'=>$customer->card_number,
                'customer_id'=>$customer->customer_id,
                'type'=>$this->faker-> randomElement(['saving', 'checking','credit card']),
                'balance'=>$this->faker->numberBetween(0,100000000),
              
        ];
    }
}
