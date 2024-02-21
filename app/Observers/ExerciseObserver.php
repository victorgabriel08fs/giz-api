<?php

namespace App\Observers;

use App\Models\Exercise;
use App\Models\RegistrationExercise;

class ExerciseObserver
{
    /**
     * Handle the Exercise "created" event.
     */
    public function created(Exercise $exercise): void
    {
        $registrations = $exercise->discipline->registrations;
        foreach ($registrations as $registration) {
            $registrationExercise = RegistrationExercise::create(['registration_id' => $registration->id, 'exercise_id' => $exercise->id]);
        }
    }

    /**
     * Handle the Exercise "updated" event.
     */
    public function updated(Exercise $exercise): void
    {
        //
    }

    /**
     * Handle the Exercise "deleted" event.
     */
    public function deleted(Exercise $exercise): void
    {
        //
    }

    /**
     * Handle the Exercise "restored" event.
     */
    public function restored(Exercise $exercise): void
    {
        //
    }

    /**
     * Handle the Exercise "force deleted" event.
     */
    public function forceDeleted(Exercise $exercise): void
    {
        //
    }
}
