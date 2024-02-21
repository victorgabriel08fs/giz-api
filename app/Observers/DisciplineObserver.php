<?php

namespace App\Observers;

use App\Models\Bond;
use App\Models\Discipline;

class DisciplineObserver
{
    /**
     * Handle the Discipline "created" event.
     */
    public function created(Discipline $discipline): void
    {
        $hasBond = Bond::where([['user_id', $discipline->teacher->id], ['career_id', $discipline->career->id], ['type', 'teacher']])->exists();
        if (!$hasBond) {
            Bond::create(['user_id' => $discipline->teacher->id, 'career_id' => $discipline->career->id, 'type' => 'teacher']);
        }
    }

    /**
     * Handle the Discipline "updated" event.
     */
    public function updated(Discipline $discipline): void
    {
        foreach ($discipline->registrations as $registration) {
            $registration->updateStatus();
        }
    }

    /**
     * Handle the Discipline "deleted" event.
     */
    public function deleted(Discipline $discipline): void
    {
        //
    }

    /**
     * Handle the Discipline "restored" event.
     */
    public function restored(Discipline $discipline): void
    {
        //
    }

    /**
     * Handle the Discipline "force deleted" event.
     */
    public function forceDeleted(Discipline $discipline): void
    {
        //
    }
}
