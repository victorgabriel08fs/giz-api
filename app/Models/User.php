<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Spatie\Permission\Traits\HasRoles;
use Tymon\JWTAuth\Contracts\JWTSubject;

class User extends Authenticatable implements JWTSubject
{
    use Notifiable, HasFactory, HasRoles;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function bonds()
    {
        return $this->belongsToMany(Career::class, 'bonds');
    }

    public function registrations()
    {
        return $this->hasMany(Registration::class);
    }

    public function semesters($bond)
    {
        if ($bond->type == "student") {
            $semesters = [];
            foreach ($this->registrations as $registration) {
                !in_array($registration->discipline->semester, $semesters) && array_push($semesters, $registration->discipline->semester);
            }
            $sortedSemesters = [];
            foreach ($semesters as $semester) {
                $count = 0;
                foreach ($semesters as $item) {
                    if ($item->created_at > $semester->created_at)
                        $count++;
                }
                $sortedSemesters[$count] = $semester;
            }
            ksort($sortedSemesters);
        } else {
            $sortedSemesters = Semester::whereHas('disciplines', function ($query) use ($bond) {
                return $query->where('teacher_id', $bond->user_id)->where('career_id', $bond->career_id);
            })->get();
        }
        return $sortedSemesters;
    }


    /**
     * Get the identifier that will be stored in the subject claim of the JWT.
     *
     * @return mixed
     */
    public function getJWTIdentifier()
    {
        return $this->getKey();
    }

    /**
     * Return a key value array, containing any custom claims to be added to the JWT.
     *
     * @return array
     */
    public function getJWTCustomClaims()
    {
        return [];
    }
}
