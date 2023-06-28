<?php

namespace Database\Seeders;

use App\Models\ClassType;
use Illuminate\Database\Seeder;

class ClassTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        ClassType::create([
            'name' => 'Yoga',
            'description' => fake()->realText(),
            'minutes' => 60,
        ]);
        ClassType::create([
            'name' => 'Dance Fitness',
            'description' => fake()->realText(),
            'minutes' => 45,
        ]);
        ClassType::create([
            'name' => 'Pilates',
            'description' => fake()->realText(),
            'minutes' => 60,
        ]);
        ClassType::create([
            'name' => 'Boxing',
            'description' => fake()->realText(),
            'minutes' => 50,
        ]);
    }
}
