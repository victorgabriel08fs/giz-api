<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RegistrationLesson extends Model
{
    use HasFactory;

    protected $fillable = [
        'registration_id',
        'lesson_id',
        'presence'
    ];

    public function registration()
    {
        return $this->belongsTo(Registration::class);
    }

    public function lesson()
    {
        return $this->belongsTo(Lesson::class);
    }
}
