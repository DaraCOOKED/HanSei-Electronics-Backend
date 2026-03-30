<<<<<<< HEAD
<?php 

namespace App\Http\Controllers; 

use Illuminate\Http\Request;
use App\Models\Employee; 

class EmployeeController extends Controller
{
    
    public function index() 
    {
        return Employee::all();
=======
<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Employee;

class EmployeeController extends Controller
{
    public function index()
    {
        return 'Dead of line.';
>>>>>>> main
    }
}