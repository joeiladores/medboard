<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class admissionModel extends Model
{
    use HasFactory;
    protected $fillable = [
        'date_time_admitted', 'complain', 'impression_diagnosis', 'age', 'weight',
        'activities', 'diet', 'tubes', 'special_info', 'date_time_discharge', 'status'
        ];
}