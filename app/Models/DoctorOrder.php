<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DoctorOrder extends Model
{
    use HasFactory;

    protected $table = 'doctor_orders';

    protected $fillable = [
        'admission_id',
        'doctor_order_id',
        'date_ordered'
    ];

    public function orderMedications() {
        return $this->hasMany(OrderMedication::class);
      }
}

