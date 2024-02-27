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

    public function updateStatus()
    {
        $status = 'IN_COURSE';
        if ($this->discipline->status == "FINISHED") {
            if ($this->points >= 70) {
                $status = "APPROVED";
            } elseif ($this->points >= 50) {
                $status = "RECUPERATION";
            } else {
                $status = "POINTS_REPROVED";
            }

            if ($this->absences > ($this->discipline->workload * .25)) {
                $status = "ABSENCES_REPROVED";
            }
        }

        $this->update(['status' => $status]);
    }

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

    public function lessons(){
        return $this->hasMany(RegistrationLesson::class);
    }
}
