<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProgressNote extends Model
{
    use HasFactory;

    protected $fillable = [
        'doctor_order_id',
        'notes',
    ];

    public function DoctorOrder()
    {
        return $this->belongsTo(DoctorOrder::class);
    }
}
