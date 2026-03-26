<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Salary extends Model
{
    protected $table = 'salaries';

    protected $primaryKey = 'id';

    protected $fillable = 
    [
        'basic_salary',
        'allowance',
    ];

    // Relationship One Salaries has Many Employees
    public function Employees()
    {
        return $this->HasMany(Employee::class);
    }
}
