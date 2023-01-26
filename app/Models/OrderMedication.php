<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OrderMedication extends Model
{
    use HasFactory;

    protected $fillable = [
        'medication',
        'dose',
        'quantity',
        'unit',
        'frequency',
        'instructions',
    ];
}
