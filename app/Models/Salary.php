<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Salary extends Model
{
<<<<<<< HEAD
    //
    protected $table = 'salary';
    
    protected $primarykey ='id';
=======
<<<<<<< HEAD
    protected $table ='salary';
>>>>>>> f3dc86f60dab9b56dfca3e9e0788ab3af48a54d9

    protected $fillable = [
        'name',
        'salary',
        'total_a',
        'total_p',
        'total_l',
        'total_salary'
    ];
<<<<<<< HEAD

    public function salary()
    {
        return $this->hasMany(Employee::class);
=======
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
>>>>>>> f3dc86f60dab9b56dfca3e9e0788ab3af48a54d9
    }
}
