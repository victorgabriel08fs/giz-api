<?php

namespace App\Observers;

use App\Models\RegistrationExercise;

class RegistrationExerciseObserver
{
    /**
     * Handle the RegistrationExercise "created" event.
     */
    public function created(RegistrationExercise $registrationExercise): void
    {
        //
    }

    /**
     * Handle the RegistrationExercise "updated" event.
     */
    public function updated(RegistrationExercise $registrationExercise): void
    {
        $sum = RegistrationExercise::where('registration_id', $registrationExercise->registration->id)->sum('points');
        $registration = $registrationExercise->registration;
        if ($registration){
            $registration->update(['points' => $sum]);
        }
    }

    /**
     * Handle the RegistrationExercise "deleted" event.
     */
    public function deleted(RegistrationExercise $registrationExercise): void
    {
        //
    }

    /**
     * Handle the RegistrationExercise "restored" event.
     */
    public function restored(RegistrationExercise $registrationExercise): void
    {
        //
    }

    /**
     * Handle the RegistrationExercise "force deleted" event.
     */
    public function forceDeleted(RegistrationExercise $registrationExercise): void
    {
        //
    }
}
