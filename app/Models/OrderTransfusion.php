<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OrderTransfusion extends Model
{
    use HasFactory;

    protected $fillable = [
        'type',
        'fluid_name',
        'instruction',
        'date_started',
        'date_stopped',
    ];
}
