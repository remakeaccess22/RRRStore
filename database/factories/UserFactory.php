<?php

namespace Database\Factories;

use App\Models\Role;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\Hash;

class UserFactory extends Factory
{
    protected $model = User::class;

    protected static ?string $password = null; // Cached password for consistent hashing

    public function definition()
    {
        return [
            'FirstName' => $this->faker->firstName, // Random first name
            'LastName' => $this->faker->lastName, // Random last name
            'Email' => $this->faker->unique()->safeEmail, // Unique email address
            'Password' => static::$password ??= Hash::make('password'), // Secure hashed password
            'RoleID' => Role::factory(), // Links user to a role
        ];
    }
}
