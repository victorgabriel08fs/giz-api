<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DisciplineSchedule extends Model
{
    use HasFactory;

    protected $fillable = [
        'items',
        'discipline_id'
    ];

    protected $casts = [
        'items'=>'array'
    ];

    public function discipline()
    {
        return $this->belongsTo(Discipline::class);
    }
}
