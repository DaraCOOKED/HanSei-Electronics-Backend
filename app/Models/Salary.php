<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Salary extends Model
{


    protected $fillable = [
        'name',
        'salary',
        'total_a',
        'total_p',
        'total_l',
        'total_salary'
    ];
    public function employee()
    {
        return $this->hasmany(employee::class);

    }
}
