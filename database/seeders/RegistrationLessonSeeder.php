<?php

namespace Database\Seeders;

use App\Models\Lesson;
use App\Models\Registration;
use App\Models\RegistrationLesson;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RegistrationLessonSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        foreach (Lesson::all() as $lesson) {
            $registrations = Registration::where('discipline_id', $lesson->discipline->id)->get();

            foreach ($registrations as $registration)
                RegistrationLesson::create(['registration_id' => $registration->id, 'lesson_id' => $lesson->id]);
        }
    }
}
