<?php

namespace Database\Seeders;

use App\Models\Restocking;
use Illuminate\Database\Seeder;

class RestockingSeeder extends Seeder
{
    public function run()
    {
        Restocking::factory(10)->create();
    }
}
