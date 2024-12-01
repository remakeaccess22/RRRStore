<?php

namespace Database\Seeders;

use App\Models\Sale;
use App\Models\SalesDetail;
use Illuminate\Database\Seeder;

class SalesDetailSeeder extends Seeder
{
    public function run()
    {
        $sales = Sale::all();

        foreach ($sales as $sale) {
            SalesDetail::factory()
                ->count(5)
                ->create(['SaleID' => $sale->SaleID]);
        }
    }
}
