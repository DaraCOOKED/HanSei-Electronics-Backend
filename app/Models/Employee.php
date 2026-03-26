<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

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