<?php

namespace Database\Factories;

use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Eloquent\Factories\Factory;

class UserFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => config('auth.admin.name'),
            'password' => Hash::make(config('auth.admin.password')),
            'admin' => 1,
        ];
    }
}
