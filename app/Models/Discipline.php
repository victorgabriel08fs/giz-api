<?php

namespace App\Models;

use App\Observers\DisciplineObserver;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Discipline extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'status',
        'workload',
        'teacher_id',
        'career_id',
        'semester_id',
        'period'
    ];

    protected static function boot()
    {
        parent::boot();

        Discipline::observe(DisciplineObserver::class);
    }

    public function teacher()
    {
        return $this->belongsTo(User::class, 'teacher_id');
    }

    public function semester()
    {
        return $this->belongsTo(Semester::class);
    }

    public function career()
    {
        return $this->belongsTo(Career::class);
    }

    public function exercises()
    {
        return $this->hasMany(Exercise::class);
    }

    public function exercisesPoints()
    {
        return $this->hasMany(Exercise::class)->sum('points');
    }

    public function registrations()
    {
        return $this->hasMany(Registration::class);
    }
}
