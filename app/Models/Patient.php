<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use function PHPUnit\Framework\returnSelf;

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

    // Connect to medical history table
    public function medhistory()
    {
        return $this->hasMany(MedicalHistory::class);
    }

    // Connect to admission table
    public function admission()
    {
        return $this->hasMany(AdmissionNew::class);
    }

}
