<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Roster extends Model
{
<<<<<<< HEAD
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
=======
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
>>>>>>> f3dc86f60dab9b56dfca3e9e0788ab3af48a54d9
