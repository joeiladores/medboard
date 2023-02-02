<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class AdmissionModel extends Model
{
    use HasFactory;
    protected $fillable = [
        'id', 'date_time_admitted', 'complain', 'impression_diagnosis', 'age', 'weight',
        'activities', 'diet', 'tubes', 'special_info', 'date_time_discharge', 'status'
        ];
}
