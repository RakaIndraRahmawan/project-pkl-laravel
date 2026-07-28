<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Seed the user table in the database.
     */
    public function run(): void
    {

        User::factory()->create([
            'username' => 'Test User',
            'password' => bcrypt('password'),
        ]);

    }
}
