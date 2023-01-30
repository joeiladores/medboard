<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OrderMedication extends Model
{
    use HasFactory;

    protected $fillable = [
        'doctor_order_id',
        'medication',
        'dose',
        'quantity',
        'unit',
        'frequency',
        'instructions',
    ];

    public function doctorOrder() {
        return $this->belongsTo(DoctorOrder::class);
      }
}
