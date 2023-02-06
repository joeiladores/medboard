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
        'admitted', 'complain','diagnosis','age','weight','activities','diet','tubes','specialinfo'
        ,'status','date_time_discharge','mentalStatus','bed_id','patient_id','primary_doctor_id'

    ];
}
