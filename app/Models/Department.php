<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Department extends Model
{
    protected $tabel = 'departments';

    protected $primayKey = 'id';

    protected $fillable = 
    [
        'department_name',

    ];
}
