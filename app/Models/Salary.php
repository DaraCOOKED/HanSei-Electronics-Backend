<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Salary extends Model
{
    //
    protected $table = 'salary';
    
    protected $primarykey ='id';

    protected $fillable = [
        'name',
        'salary',
        'total_a',
        'total_p',
        'total_l',
        'total_salary'
    ];

    public function salary()
    {
        return $this->hasMany(Employee::class);
    }
}
