<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OrderTreatment extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'type',
        'instruction',
        'date_done',
    ];
}
