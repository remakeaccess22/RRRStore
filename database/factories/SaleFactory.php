<?php

namespace Database\Factories;

use App\Models\Sale;
use Illuminate\Database\Eloquent\Factories\Factory;

class SaleFactory extends Factory
{
    protected $model = Sale::class;

    public function definition()
    {
        return [
            'SaleDate' => $this->faker->dateTimeBetween('-1 year', 'now'), // Sale date within the last year
            'PaymentType' => $this->faker->randomElement(['Cash', 'Credit', 'Online']), // Random payment type
            'TotalAmount' => $this->faker->randomFloat(2, 100, 1000), // Total amount with two decimal places
        ];
    }
}
