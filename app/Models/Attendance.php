<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Attendance extends Model
{
<<<<<<< HEAD
    // 
    protected $table = 'attendances';

    protected $primarykey = 'id';

    protected $fillable = [
        'employee_id',
        'name',
        'name',
        'check_in',
        'check_out'
    ];

    public function attendances()
    {
        return $this->hasMany(Attendance::class);
    }
=======
    //
>>>>>>> f3dc86f60dab9b56dfca3e9e0788ab3af48a54d9
}
