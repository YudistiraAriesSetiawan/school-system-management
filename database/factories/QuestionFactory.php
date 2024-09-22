<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Question>
 */
class QuestionFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $answers = [];
        for ($i = 0; $i < 4; $i++) {
            $answers[] = [
                'poin' => (string) $this->faker->randomElement(['10', '0']),
                'answer' => $this->faker->word,
            ];
        }

        return [
            'question_text' => fake()->sentence(5),
            'answer' => $answers
        ];
    }
}
