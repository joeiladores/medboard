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
    public function admission() {
        return $this->belongsTo(Admission::class);
      }
    public function orderMedication() {
        return $this->hasMany(OrderMedication::class);
    }
    public function orderTransfusion() {
        return $this->hasMany(OrderTransfusion::class);
    }
    public function orderTreatment() {
        return $this->hasMany(OrderTreatment::class);
    }
    public function progressNote() {
        return $this->hasMany(ProgressNote::class);
    }


    
}

