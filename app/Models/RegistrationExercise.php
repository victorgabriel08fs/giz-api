<?php

namespace App\Models;

use App\Observers\RegistrationExerciseObserver;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RegistrationExercise extends Model
{
    use HasFactory;

    protected $fillable = [
        'exercise_id',
        'registration_id',
        'points'
    ];

    protected static function boot()
    {
        parent::boot();
    
        RegistrationExercise::observe(RegistrationExerciseObserver::class);
    }

    public function exercise(){
        return $this->belongsTo(Exercise::class);
    }
    
    public function registration(){
        return $this->belongsTo(Registration::class);
    }
}
