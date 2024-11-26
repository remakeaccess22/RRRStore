<?php

namespace Database\Factories;

use App\Models\Category;
use App\Models\Product;
use App\Models\Supplier;
use Illuminate\Database\Eloquent\Factories\Factory;

class ProductFactory extends Factory
{
    protected $model = Product::class;

    public function definition()
    {
        return [
            'ProductName' => $this->faker->word,
            'CategoryID' => Category::factory(),
            'SupplierID' => Supplier::factory(),
            'QuantityInStock' => $this->faker->numberBetween(0, 100),
            'RestockThreshold' => $this->faker->numberBetween(1, 10),
            'UnitPrice' => $this->faker->randomFloat(2, 10, 100),
            'ExpirationDate' => $this->faker->optional()->date(),
        ];
    }
}
