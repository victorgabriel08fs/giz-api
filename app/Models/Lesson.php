<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Lesson extends Model
{
    use HasFactory;

    protected $fillable = [
        'discipline_id',
        'datetime'
    ];

    public function discipline()
    {
        return $this->belongsTo(Discipline::class);
    }

    public function registers()
    {
        return $this->hasMany(RegistrationLesson::class)->with('registration.user');
    }
}
