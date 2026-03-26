<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    protected $table = 'employees';

    protected $primaryKey = 'id';

    public $fillable = [
        'name',
        'date_of_birth',
        'sex',
        'phone',
        'email',
        'profile',
        'place_of_birht',
        'experience',
        'position',
        'shift',
        'status',
        'hired_date',

    ];

    //Relationship: One Employee has many Attendences
    public function attendences()
    {
        return $this->hasMany(Attendence::class);
    }
}
