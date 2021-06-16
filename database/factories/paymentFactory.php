<?php

namespace Database\Factories;

use App\Models\payment;
use Illuminate\Database\Eloquent\Factories\Factory;

class paymentFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = payment::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            
                'payment_id' => rand(1,10),
                'payer_id' => rand(121,123),
                'payer_email' => $this->faker->email(),
                'amount' => rand(.01,1),
                'currency'=> 'USD',
                'payment_status'=> 'processing'|| 'pending',
                

        
        ];
    }
}
