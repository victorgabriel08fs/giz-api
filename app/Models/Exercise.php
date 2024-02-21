<?php

namespace App\Models;

use App\Observers\ExerciseObserver;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Exercise extends Model
{
    use HasFactory;

    protected $fillable = [
        'discipline_id',
        'name',
        'description',
        'points',
    ];

    protected static function boot()
    {
        parent::boot();

        Exercise::observe(ExerciseObserver::class);
    }

    public function discipline()
    {
        return $this->belongsTo(Discipline::class);
    }

    public function registrations()
    {
        return $this->hasMany(RegistrationExercise::class,'exercise_id');
    }
}
