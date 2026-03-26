<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Roster extends Model
{
    //
    protected $table = 'rosters';
    
    protected $primarykey = 'id';

    protected $fillable = [
        'employee_id',
    ];

    public function rosters()
    {
        return $this->hasMany(Employee::class);
    }
}
