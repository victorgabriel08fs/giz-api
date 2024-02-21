<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bond extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'type',
        'career_id'
    ];

    public function career()
    {
        return $this->belongsTo(Career::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
