<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    use HasFactory;

    protected $table = 'events';

    protected $fillable = [
        'author_id',
        'user_id',
        'name',
        'date_start',
        'date_end',
        'time_start',
        'time_end',
        'place',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
