<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Roster extends Model
{
    protected $tabel = 'rosters';

    protected $primayKey = 'id';

    protected $fillable = 
    [
        'position',
        'status',
    ];
}
