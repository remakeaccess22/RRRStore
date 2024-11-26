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
            'ProductID' => Product::factory(),
            'SupplierID' => Supplier::factory(),
            'RestockDate' => $this->faker->date(),
            'QuantityRestocked' => $this->faker->numberBetween(1, 50),
            'TotalCost' => $this->faker->randomFloat(2, 100, 1000),
        ];
    }
}
