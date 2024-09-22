<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Teacher>
 */
class TeacherFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
           'name'=>fake()->name(),
           'date_of_birth'=>fake()->date(),
           'address'=>fake()->streetAddress(),
           'phone'=>fake()->phoneNumber(),
           'email'=>fake()->unique()->safeEmail(),
           'position'=>fake()->randomElement(['Mathematics', 'Science', 'English Language Arts', 'Social Studies', 'Foreign Languages']),
        ];
    }
}
