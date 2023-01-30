<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DoctorOrder extends Model
{
    use HasFactory;

    protected $fillable = [
        'date_ordered',
        'type',
        'progress_notes',
        'admission_id',
        'doctor_id',
        'nurse_id',
    ];

    // public function admission()
    // {
    //     return $this->belongsTo(Admission::class);
    // }

    // public function doctor()
    // {
    //     return $this->belongsTo(Doctor::class);
    // }

    // public function nurse()
    // {
    //     return $this->belongsTo(Nurse::class);
    // }
}

