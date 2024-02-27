<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Discipline;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call([
            RoleSeeder::class,
            UserSeeder::class,
            UniversitySeeder::class,
            CentreSeeder::class,
            DepartamentSeeder::class,
            CareerSeeder::class,
            SemesterSeeder::class,
            DisciplineSeeder::class,
            BondSeeder::class,
            RegistrationSeeder::class,
            ExerciseSeeder::class,
            RegistrationExerciseSeeder::class,
            LessonSeeder::class,
            RegistrationLessonSeeder::class,
        ]);
    }
}
