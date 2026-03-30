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
    public function definition()
    {
        // All department name
        // $countries = file_get_contents(storage_path('countries/countries.json'));

        // $countries_array = json_decode($countries, true);

        // $country_name = array_column($countries_array, 'name');

        // $country_codes = array_column($countries_array, 'code');

        // return [
        //     'country_name' => fake()->unique()->randomElement($country_name),
        //     'country_code' => fake()->unique()->randomElement($country_codes),
        //     'flag_img' => null,
        // ];
    }
}
