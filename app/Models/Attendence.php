<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Attendence extends Model
{
    protected $table = 'attendences';

    protected $primaryKey = 'id';

    protected $fillable = 
    [
        'check_in',
        'check_out',
        'date',
        'location',
        'status',
    ];

    
    // Relationship: One employees has many attendences
    public function attendences()
    {
        return $this->HasMany(Attendence::class);
    }

    // Relationship: Many attendences has many employees
    public function employees()
    {
        return $this->belongsTo(employee::class);
    }

}
