<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run()
    {
        $this->call([
            RoleSeeder::class,
            CategorySeeder::class,
            SupplierSeeder::class,
            UserSeeder::class,
            ProductSeeder::class,
            SaleSeeder::class,
            SalesDetailSeeder::class,
            RestockingSeeder::class,
        ]);
    }
}
