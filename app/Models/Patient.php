<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Patient extends Model
{
    use HasFactory;

    protected $table = 'patients';

    protected $fillable =
    [
        'lastname',
        'firstname',
        'midname',
        'marital_status',
        'birth_date',
        'gender',
        'blood_type',
        'address',
        'phone',
        'health_insurance',
        'relative_fullname',
        'relation',
        'relative_phone'

    ];

    public function medhistory()
    {
        return $this->hasMany(MedicalHistory::class);
    }

}

