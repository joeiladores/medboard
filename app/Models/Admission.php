<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Admission extends Model
{   
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'bed_id',
        'user_id',
        'patient_id',
        'primary_doctor_id',
        'admitted', 
        'complain',
        'diagnosis',
        'age',
        'weight',
        'activities',
        'diet',
        'tubes',
        'specialinfo',
        'mentalStatus',
        'status',
        'date_time_discharged',
        ];
}
