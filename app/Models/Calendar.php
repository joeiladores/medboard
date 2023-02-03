<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Calendar extends Model
{
    use HasFactory, SoftDeletes;

    public $timestamps = TRUE;

    protected $table = 'calendars';

    protected $fillable = [
        'title',
        'start',
        'end',
        'description',
        'status',
        'color',
        'resourceId'
    ];
}
