<?php

namespace Database\Seeders;

use App\Models\Role;
use App\Models\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    public function run()
    {
        $roles = Role::all();

        foreach ($roles as $role) {
            User::factory()->count(5)->create(['RoleID' => $role->RoleID]);
        }
    }
}
