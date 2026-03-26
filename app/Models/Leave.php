<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Leave extends Model
{
    protected $tabel = 'leaves';

    protected $primayKey = 'id';

    protected $fillable = 
    [
        'position',
        'reason',
        'type_of_leaving',
        'start_date',
        'end_date',
    ];
}
