<?php

namespace Database\Factories;

use App\Models\Country;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Country>
 */
class CountryFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        // All department name
        $countries = [
            'Bangladesh',
            'India',
            'Pakistan',
            'Nepal',
            'Bhutan',
        ];

        return [
            'country_name' => $this->faker->unique()->randomElement($countries),
            'flag_img' => $this->faker->image('public/flags', 640, 480, 'country', false),
        ];
    }
}
