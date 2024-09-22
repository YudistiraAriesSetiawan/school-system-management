<?php

namespace Database\Seeders;

use App\Models\Classroom;
use App\Models\Exam;
use App\Models\Question;
use App\Models\Student;
use App\Models\Student_Class;
use App\Models\Subject;
use App\Models\Teacher;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        User::factory()->create([
            'name' => 'Admin',
            'email' => 'admin@mail.com',
            'password' => Hash::make('123456'),
        ]);

        Teacher::factory(5)
            ->has(Classroom::factory(2)
                ->has(Exam::factory(1)->has(Question::factory(50)))
                ->has(Student::factory(25)))
            ->create();

        Subject::factory(20)->create();

        // Exam::factory(1)
        //     ->for(
        //         Classroom::factory(1)
        //         ->for(Teacher::factory(1))
        //         )->has(Question::factory(1))
        //     ->create();
        // Student::factory(5)->for(Classroom::factory(5))->create();





    }
}
