<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OrderTransfusion extends Model
{
    use HasFactory;

    protected $table = 'order_transfusions';

    protected $fillable = [
        'doctor_order_id',
        'type',
        'fluid_name',
        'instruction',
    ];
    public function doctorOrder() {
        return $this->belongsTo(DoctorOrder::class);
      }
    
}
