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
            'ProductName' => $this->faker->unique()->words(2, true), // Generate a two-word product name
            'CategoryID' => Category::factory(), // Links a product to a category
            'SupplierID' => Supplier::factory(), // Links a product to a supplier
            'QuantityInStock' => $this->faker->numberBetween(0, 100), // Random stock quantity
            'RestockThreshold' => $this->faker->numberBetween(1, 10), // Low stock threshold
            'UnitPrice' => $this->faker->randomFloat(2, 10, 100), // Price with two decimal places
            'ExpirationDate' => $this->faker->optional()->dateTimeBetween('+1 month', '+1 year'), // Optional expiration date
        ];
    }
}
