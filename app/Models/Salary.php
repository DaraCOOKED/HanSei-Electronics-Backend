<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Salary extends Model
{
<<<<<<< HEAD
    protected $table ='salary';

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
=======
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
>>>>>>> 472568e1cc3cffe940681908cdee6ab635fdbefd
    }
}
