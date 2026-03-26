<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
<<<<<<< HEAD

class SalaryController extends Controller
{
    //

    public function index()
    { 
        return 'please show';
=======
<<<<<<< HEAD

class SalaryController extends Controller
{
    
    public function index()
    {
        // return all attendances
        return response()->json(['haha' => 'fuck']);
=======
use App\Models\Salary;

class SalaryController extends Controller
{
    public function index()
    {
        return 'mama';
>>>>>>> 472568e1cc3cffe940681908cdee6ab635fdbefd
>>>>>>> f3dc86f60dab9b56dfca3e9e0788ab3af48a54d9
    }
}
