<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Salary extends Model
{
    protected $tabel = 'salaries';

    protected $primayKey = 'id';

    protected $fillable = 
    [
        'basic-salary',
        'allowance',
    ];
}
