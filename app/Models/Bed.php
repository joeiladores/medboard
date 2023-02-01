<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bed extends Model
{
    use HasFactory;

    protected $table = 'beds';

    protected $fillable = [
        'bednum',
        'room',
        'room_type',
        'station',
        'status',
    ];

    // Connect to admisison table
    // public function bed()
    // {
    //     return $this->hasOne(Admission::class);
    // }
}
