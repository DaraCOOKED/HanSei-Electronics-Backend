<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Leave extends Model
{
    protected $table = 'leaves';

    protected $primaryKey = 'id';

    public $fillable = [

        'reason',
        'type_of_leaving',
        'start_date',
        'end_date',
    ];

    // Relationship One employees has many leaves
    public function employees()
    {
        return $this->HasMany(Employee::class);
    }

    // Relationship Many leaves to one employees
    public function leaves()
    {
        return $this->belongsTo(Leave::class);
    }
}
