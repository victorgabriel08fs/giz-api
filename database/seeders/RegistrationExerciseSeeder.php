<?php

namespace Database\Seeders;

use App\Models\Exercise;
use App\Models\Registration;
use App\Models\RegistrationExercise;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RegistrationExerciseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $registrations = Registration::whereRelation('discipline', 'semester_id', 2)->get();

        foreach ($registrations as $registration) {
            $exercises = $registration->discipline->exercises;
            foreach ($exercises as $exercise) {
                RegistrationExercise::create(['registration_id' => $registration->id, 'exercise_id' => $exercise->id, 'points' => rand(0, $exercise->points)]);
                $sum = RegistrationExercise::where('registration_id', $registration->id)->sum('points');
                $registration->update(['points' => $sum]);
            }
            if($registration->points>=70){
                $registration->update(['status'=>"APPROVED"]);
            }elseif($registration->points>=50){
                $registration->update(['status'=>"RECUPERATION"]);
            }else{
                $registration->update(['status'=>"POINTS_REPROVED"]);
            }
        }
    }
}
