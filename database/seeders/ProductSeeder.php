<?php

namespace Database\Seeders;

use App\Models\Product;
use App\Models\Category;
use App\Models\Supplier;
use App\Models\Subcategory;
use App\Models\Brand;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    public function run()
    {
        // Create random and unique 5-digit CategoryID, SupplierID, SubcategoryID, and BrandID
        $categoryID = $this->generateUniqueID(Category::class, 'CategoryID');
        $supplierID = $this->generateUniqueID(Supplier::class, 'SupplierID');
        $subcategoryID = $this->generateUniqueID(Subcategory::class, 'SubcategoryID');
        $brandID = $this->generateUniqueID(Brand::class, 'BrandID');

        // Seed the products table with random data
        Product::factory()
            ->count(20)
            ->create([
                'CategoryID' => $categoryID,
                'SupplierID' => $supplierID,
                'SubcategoryID' => $subcategoryID,
                'BrandID' => $brandID,
                'BasePrice' => 0.0,
            ]);

        $this->call([
            ProductSeeder::class, // Add this line if it's missing
        ]);
    }

    // Function to generate a unique 5-digit ID
    private function generateUniqueID($model, $column)
    {
        do {
            $randomID = rand(10000, 99999); // Generate a random 5-digit ID
        } while ($model::where($column, $randomID)->exists()); // Check if the ID exists in the correct table and column

        return $randomID;
    }
}
