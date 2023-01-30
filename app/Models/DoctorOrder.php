<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DoctorOrder extends Model
{
    use HasFactory;

    protected $fillable = [
        'admission_id',
        'doctor_id',
        'nurse_id',
        'date_ordered',
        'type',
        'progress_notes',
    ];

    public function orderMedications() {
        return $this->hasMany(OrderMedication::class);
      }
}

