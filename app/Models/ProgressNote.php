<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProgressNote extends Model
{
    use HasFactory;

    protected $table = 'progress_notes';

    protected $fillable = [
        'doctor_order_id',
        'notes',
    ];

    public function doctorOrder() {
        return $this->belongsTo(DoctorOrder::class);
      }
}
