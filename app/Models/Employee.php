<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

<<<<<<< HEAD
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
=======
<<<<<<< HEAD
class Employee extends Model 
{
    protected $table = 'employees';

    protected $fillable = [
        'first_name', 
        'last_name', 
        'email', 
        'position', 
        'salary'
    ];
    public function attendances()
    {
        return $this->hasMany(Attendance::class);
    }
}
=======
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
>>>>>>> 472568e1cc3cffe940681908cdee6ab635fdbefd
>>>>>>> f3dc86f60dab9b56dfca3e9e0788ab3af48a54d9
