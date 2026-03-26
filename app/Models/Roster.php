<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Roster extends Model
{
    protected $table = 'rosters';

    protected $primaryKey = 'id';

    protected $fillable = 
    [
        'name',
    ];

    //Relationship: One Rosters has many Employees

    public function Employees()
    {
        return $this->hasMany(Employee::class);
    }

}

// many to one (belong to)