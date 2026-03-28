<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Designation>
 */
class DesignationFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {

        // All designation name
        $designation = [
            'CEO',
            'Managing Director',
            'Project Manager',
            'IT Manager',
            'Software Developer',
        ];

        return [
            'designation_name' => fake()->randomElement($designation),
            'parent_id' => null
        ];
    }
}
