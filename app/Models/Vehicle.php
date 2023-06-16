<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vehicle extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'make',
        'model',
        'year',
        'plate_number',
        'engine_number',
        'status',
        'statusAvailable',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
