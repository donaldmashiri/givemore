<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BookTaxi extends Model
{
    use HasFactory;

    protected $fillable = [
        'from_des',
        'to_des',
        'date_time',
        'vehicle_id',
        'user_id',
        'status',
    ];

    public function vehicle()
    {
        return $this->belongsTo(Vehicle::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

}
