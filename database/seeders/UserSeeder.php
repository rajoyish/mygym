<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::factory()->create([
            'name' => 'Rajesh Budhathoki',
            'email' => 'mail@rajoyish.com',
            'role' => 'instructor',
        ]);

        User::factory()->create([
            'name' => 'Anu Ghimire',
            'email' => 'mail@anu.com',
            'role' => 'admin',
        ]);

        User::factory()->create([
            'name' => 'Rose of Sharon',
            'email' => 'mail@roseofsharon.com',
        ]);

        User::factory()->count(10)->create();

        User::factory()->count(10)->create([
            'role' => 'instructor ',
        ]);
    }
}
