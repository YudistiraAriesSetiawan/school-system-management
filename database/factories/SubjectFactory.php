<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Subject>
 */
class SubjectFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => fake()->unique()->randomElement([
                'Algebra',
                'Geometry',
                'Trigonometry',
                'Calculus',
                'Statistics',
                'Biology',
                'Chemistry',
                'Physics',
                'Environmental Science',
                'Earth Science',
                'Literature',
                'Composition',
                'Creative Writing',
                'American Literature',
                'British Literature',
                'History (World History, U.S. History)',
                'Geography',
                'Civics',
                'Economics',
                'Sociology'
            ]),
            'description' =>  fake()->sentence(3)
        ];
    }
}
