<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class UserFactory extends Factory
{

    protected static ?string $password;

    public function definition(): array
    {
        $admins = [
            [
                'name' => 'Admin',
                'email' => 'user.admin@admin.cz',
                'password' => 'ADMINpasswordADMIN',
                'admin' => true,
            ],
        ];

        $admin = $this->faker->randomElement($admins);

        return [
            'name' => $admin['name'],
            'email' => $admin['email'],
            'email_verified_at' => now(),
            'password' => $admin['password'],
            'admin' => $admin['admin'],
            'remember_token' => Str::random(10),
        ];
    }

    public function unverified(): static
    {
        return $this->state(fn (array $attributes) => [
            'email_verified_at' => null,
        ]);
    }
}
