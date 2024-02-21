<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Registration extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'points',
        'absences',
        'status',
        'discipline_id',
    ];

    public function discipline()
    {
        return $this->belongsTo(Discipline::class)->with('semester');
    }

    public function exercises()
    {
        return $this->hasMany(RegistrationExercise::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
