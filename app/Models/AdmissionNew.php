<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AdmissionNew extends Model
{
    use HasFactory;

    protected $table = 'admission_news';

    protected $fillable =
    [
        'type',
        'complain',
        'impression_diagnosis',
        'age',
        'weight',
        'mental_status',
        'activities',
        'diet',
        'tubes',
        'special_info',
        'status'
    ];

    // Connect to bed table
    public function adbed()
    {
        return $this->belongsTo(Bed::class);
    }

    // Connect to patient table
    public function adpatient()
    {
        return $this->hasMany(Patient::class);
    }

    // Connect to users table
    public function addoc()
    {
        return $this->belongsTo(User::class);
    }


}
