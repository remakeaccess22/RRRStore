<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use ProductSeeder;
use SupplierSeeder;

class DatabaseSeeder extends Seeder
{
    public function run()
    {
        $this->call([
            RoleSeeder::class,
            UserSeeder::class,
            CategorySeeder::class,
            SupplierSeeder::class,
            ProductSeeder::class,
            SaleSeeder::class,
            SalesDetailSeeder::class,
            RestockingSeeder::class,
        ]);
    }
}
