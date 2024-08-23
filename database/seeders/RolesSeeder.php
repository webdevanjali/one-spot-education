<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Role;

class RolesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //Define roles in the seeder:
        Role::create(['role_name' => 'admin', 'role_description' => 'Administrator']);
        Role::create(['role_name' => 'teacher', 'role_description' => 'Teacher']);
        Role::create(['role_name' => 'sutdent', 'role_description' => 'Student']);
        Role::create(['role_name' => 'user', 'role_description' => 'Regular User']);

    }
}
