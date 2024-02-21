<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Career extends Model
{
    use HasFactory;

    public function departament()
    {
        return $this->belongsTo(Departament::class);
    }

    public function disciplines()
    {
        return $this->hasMany(Discipline::class)->with('teacher','semester');
    }
}
