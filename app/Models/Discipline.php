<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Discipline extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'teacher_id',
        'career_id',
        'semester_id',
        'period'
    ];

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

    public function registrations()
    {
        return $this->hasMany(Registration::class);
    }
}
