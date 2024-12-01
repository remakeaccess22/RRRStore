<?php

namespace Database\Factories;

use App\Models\Product;
use App\Models\Sale;
use App\Models\SalesDetail;
use Illuminate\Database\Eloquent\Factories\Factory;

class SalesDetailFactory extends Factory
{
    protected $model = SalesDetail::class;

    public function definition()
    {
        return [
            'SaleID' => Sale::factory(), // Associates sales detail with a sale
            'ProductID' => Product::factory(), // Associates sales detail with a product
            'QuantitySold' => $this->faker->numberBetween(1, 10), // Random quantity sold
            'Subtotal' => $this->faker->randomFloat(2, 10, 100), // Subtotal with two decimal places
        ];
    }
}
