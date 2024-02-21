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
        $previous_value = $exercise->getOriginal('points');
        if ($previous_value != $exercise->points) {
            $proportion = $previous_value == 0 || $exercise->points == 0 ? 1 : $exercise->points / $previous_value;
            foreach ($exercise->registrations as $registration) {
                $registration->update(['points' => $registration->points * $proportion]);
            }
        }
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
