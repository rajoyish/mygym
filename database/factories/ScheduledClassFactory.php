<?php

namespace Database\Factories;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\ScheduledClass>
 */
class ScheduledClassFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'instructor_id' => fake()->numberBetween(14, 23),
            'class_type_id' => fake()->randomElement([1, 2, 3, 4]),
            'date_time' => Carbon::now()->addHours(rand(24, 124))->minutes(0)->seconds(0),
        ];
    }
}
