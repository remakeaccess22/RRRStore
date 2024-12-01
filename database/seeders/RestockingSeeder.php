<?php

namespace Database\Seeders;

use App\Models\Product;
use App\Models\Restocking;
use App\Models\Supplier;
use Illuminate\Database\Seeder;

class RestockingSeeder extends Seeder
{
    public function run()
    {
        $products = Product::all();
        $suppliers = Supplier::all();

        foreach ($products as $product) {
            Restocking::factory()
                ->count(3)
                ->create([
                    'ProductID' => $product->ProductID,
                    'SupplierID' => $suppliers->random()->SupplierID,
                ]);
        }
    }
}
