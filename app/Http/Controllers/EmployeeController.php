<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
<<<<<<< HEAD

class EmployeeController extends Controller
{
    //


    public function index()
    {
        // return all attendances
        return response()->json(['haha' => 'fuck']);
=======
use App\Models\Employee;

class EmployeeController extends Controller
{
    public function index()
    {
        return 'kk';
>>>>>>> 472568e1cc3cffe940681908cdee6ab635fdbefd
    }
}
