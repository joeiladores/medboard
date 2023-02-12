<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AdmissionNew extends Model
{
    use HasFactory;

    protected $table = 'admission_news';

    protected $fillable =
    [
        'bed_id',
        'patient_id',
        'admitting_doctor_id',
        'primary_doctor_id',
        'type',
        'complain',
        'impression_diagnosis',
        'age',
        'weight',
        'mental_status',
        'activities',
        'diet',
        'tubes',
        'special_info',
        'status'
    ];

    // Connect to bed table
    public function bed()
    {
        return $this->belongsTo(Bed::class);
    }

    // Connect to patient table
    public function patients()
    {
        return $this->belongsToMany(Patient::class);
    }

    // Connect to users table
    public function doctor()
    {
        return $this->hasMany(User::class);
    }


}
