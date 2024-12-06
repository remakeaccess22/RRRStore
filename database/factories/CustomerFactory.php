<?php

namespace Database\Factories;

use App\Models\Customer;
use Illuminate\Database\Eloquent\Factories\Factory;

class CustomerFactory extends Factory
{
    protected $model = Customer::class;

    public function definition()
    {
        return [
            'CustomerName' => $this->faker->name(), // Generate a realistic name
            'ContactInfo' => $this->faker->optional()->phoneNumber(), // Optional contact information
        ];
    }
}
