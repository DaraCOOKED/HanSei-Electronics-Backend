<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    protected $tabel = 'employees';

    protected $primayKey = 'id';

    protected $fillable = 
    [
        'name',
        'date_of_birth',
        'sex',
        'phone',
        'email',
        'profile',
        'experience',
        'position',
        'shift',
        'hired_date',
    ];
}
