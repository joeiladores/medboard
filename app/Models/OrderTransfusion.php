<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OrderTransfusion extends Model
{
    use HasFactory;

    protected $fillable = [
        'doctor_order_id',
        'type',
        'fluid_name',
        'instruction',
        'date_started',
        'date_stopped',
    ];
    public function DoctorOrder()
    {
        return $this->belongsTo(DoctorOrder::class);
    }
    
}
