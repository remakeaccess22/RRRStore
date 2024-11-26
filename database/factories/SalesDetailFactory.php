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
            'SaleID' => Sale::factory(),
            'ProductID' => Product::factory(),
            'QuantitySold' => $this->faker->numberBetween(1, 10),
            'Subtotal' => $this->faker->randomFloat(2, 10, 100),
        ];
    }
}
