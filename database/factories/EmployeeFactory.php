<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Employee>
 */
class EmployeeFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'user_id' => fake()->numberBetween(1, 20),
            'name' => fake()->unique()->name(),
            'profile_picture' => fake()->imageURL(),
            'designation_id' => fake()->numberBetween(1, 20),
            'department_id' => fake()->numberBetween(1, 20),
            'country_id' => fake()->numberBetween(1, 20),
            'mobile' => fake()->phoneNumber(),
            'gender' => fake()->randomElement(['male', 'female', 'other']),
            'joining_date' => fake()->date(),
            'birth_date' => fake()->date(),
            'reporting_to' => fake()->numberBetween(1, 20),
            'language_id' => fake()->numberBetween(1, 20),
            'address' => fake()->address(),
            'about' => fake()->paragraph(),
            'login_permission' => fake()->boolean(),
            'notification_permission' => fake()->boolean(),
            'hourly_rate' => fake()->randomFloat(2, 10, 100),
            'slack_username' => fake()->userName(),
            'skills' => fake()->text(),
        ];
    }
}
