<?php

namespace Database\Seeders;

use App\Models\Role;
use Illuminate\Database\Seeder;

class RoleSeeder extends Seeder
{
    public function run()
    {
        $roles = ['Admin', 'Employee', 'Applicant'];

        foreach ($roles as $role) {
            Role::create(['RoleName' => $role]);
        }
    }
}
