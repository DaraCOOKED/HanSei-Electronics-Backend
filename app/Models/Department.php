<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Department extends Model
{
    //
    protected $table = 'departments';
    
    protected $primarykey = 'id';

    protected $fillable = [
        'name',
    ];
    public function attendances()
    {
        return $this->hasMany(Attendance::class);
    }
}
