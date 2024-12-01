<?php

namespace Database\Factories;

use App\Models\Product;
use App\Models\Restocking;
use App\Models\Supplier;
use Illuminate\Database\Eloquent\Factories\Factory;

class RestockingFactory extends Factory
{
    protected $model = Restocking::class;

    public function definition()
    {
        return [
            'ProductID' => Product::factory(), // Associates restocking with a product
            'SupplierID' => Supplier::factory(), // Associates restocking with a supplier
            'RestockDate' => $this->faker->dateTimeThisYear(), // Random restocking date in the current year
            'QuantityRestocked' => $this->faker->numberBetween(1, 50), // Random restocked quantity
            'TotalCost' => $this->faker->randomFloat(2, 100, 1000), // Total cost with two decimal places
        ];
    }
}
