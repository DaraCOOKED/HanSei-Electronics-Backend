<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Attendance extends Model
{
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
}
