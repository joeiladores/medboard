<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OrderTreatment extends Model
{
    use HasFactory;

    protected $table = 'order_treatment';

    protected $fillable = [
        'doctor_order_id',
        'name',
        'type',
        'instruction',
        'date_started',
        'date_done'
    ];

    public function DoctorOrder()
    {
        return $this->belongsTo(DoctorOrder::class);
    }
}
