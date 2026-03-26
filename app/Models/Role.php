<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    //
    protected $table = 'roles';
    
    protected $primarykey = 'id';

    protected $fillable = [
        'name',
        'permission',
        'role_name',
        'session_time'
    ];

    public function roles()
    {
        return $this->hasMany(Employee::class);
    }
}
