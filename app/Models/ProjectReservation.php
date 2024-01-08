<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProjectReservation extends Model
{
    use HasFactory;


    protected $casts = [
        'start_date' => 'date' ,
        'end_date' => 'date' ,
    ];


    public function user()
    {
        return $this->belongsTo(User::class , 'user_id');
    }
}
