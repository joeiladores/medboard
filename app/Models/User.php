<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Database\Eloquent\Casts\Attribute;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */

    protected $table = 'users';

    protected $fillable = [
        'name',
        'email',
        'password',

        'usertype',
        'lastname',
        'firstname',
        'middlename',
        'birthdate',
        'gender',
        'address',
        'phone',
        'department',
        'specialization',
        'imagepath',
        'status',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    /**
     * Interact with the user's first name.
     *
     * @param  string  $value
     * @return \Illuminate\Database\Eloquent\Casts\Attribute
     */
    protected function uesrtype(): Attribute
    {
        return new Attribute(
            get: fn ($value) =>  ["admin", "doctor", "nurse", "chiefnurse"][$value],
        );
    }

    // Doctor attends to one or more patients in an admission
    public function attendsTo(){
        return $this->hasMany(Admission::class);
    }

    // Nurse assigned to a nurse station
    public function nurseAssignedTo(){
        return $this->belongsTo(NurseAssignment::class);
    }



}
