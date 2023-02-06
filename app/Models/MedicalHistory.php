<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MedicalHistory extends Model
{
    use HasFactory;

    protected $table = 'medical_histories';

    protected $fillable = 
    [
        'patient_id',
        'date',
        'conditions',
        'symptoms',
        'medications',
        'allergies',
        'bad_habit'
    ];

    public function patient()
    {
        return $this->belongsTo(Patient::class);
    }
}
