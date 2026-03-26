<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Attendence extends Model
{
    protected $tabel = 'attendencs';

    protected $primayKey = 'id';

    protected $fillable = 
    [
        'check_in',
        'check_out',
        'date',
        'status',

    ];
}
