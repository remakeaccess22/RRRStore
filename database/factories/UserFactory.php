<?php

namespace Database\Factories;

use App\Models\Role;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\User>
 */
class UserFactory extends Factory
{
    /**
     * The current password being used by the factory.
     */
    protected static ?string $password = null;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'Email' => $this->faker->unique()->email(),
            'Name' => $this->faker->name(),
            'Password' => static::$password ??= Hash::make('password'),
            'RoleID' => Role::factory(),
        ];
    }

    /**
     * Indicate that the model's email address should be unverified.
     *
     * This is not applicable for your structure since `email_verified_at` is not a field in the User model.
     * However, if needed, you can define additional states as required.
     */
}
