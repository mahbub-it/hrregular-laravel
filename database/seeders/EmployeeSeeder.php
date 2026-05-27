<?php

namespace Database\Seeders;

use App\Models\Employee;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class EmployeeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Get all non-admin users
        $nonAdminUsers = User::where('role', '!=', 'administrator')->get();
        
        // Create one employee for each non-admin user
        Employee::factory(count($nonAdminUsers))->create();
    }
}
