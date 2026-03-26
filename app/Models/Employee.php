<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    //
    protected $table = 'employees';
    
    protected $primarykey = 'id';

    protected $fillable = [
        'name',
        'date of born',
        'sex',
        'phone',
        'email',
        'place of born',
        'experience',
        'shirt',
        'status',
        'hired_date',
        'salary'

    ];
}
