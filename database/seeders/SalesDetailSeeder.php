<?php

namespace Database\Seeders;

use App\Models\SalesDetail;
use Illuminate\Database\Seeder;

class SalesDetailSeeder extends Seeder
{
    public function run()
    {
        SalesDetail::factory(30)->create();
    }
}
