<?php

namespace Database\Seeders;

use App\Models\Discipline;
use App\Models\Lesson;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class LessonSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        foreach (Discipline::all() as $discipline) {
            Lesson::create(['discipline_id' => $discipline->id, 'datetime' => '2024-02-27 07:10']);
            Lesson::create(['discipline_id' => $discipline->id, 'datetime' => '2024-02-28 07:10']);
            Lesson::create(['discipline_id' => $discipline->id, 'datetime' => '2024-02-29 07:10']);
        }
    }
}
