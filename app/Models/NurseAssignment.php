<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class NurseAssignment extends Model
{
    use HasFactory;

    protected $table = 'nurse_assignments';

    protected $fillable = [
        'user_id',
        'datetime_start',
        'datetime_end',
        'shift',
        'station',
    ];

    // Connect to users table
    public function nurseAssignments()
    {
        return $this->hasMany(User::class);
    }
}
