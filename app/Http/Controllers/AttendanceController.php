<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AttendanceController extends Controller
{
    //

<<<<<<< HEAD
    public function index()
    { 
        return 'boy loy';
    }
}
=======

     public function index()
    {
        // return all attendances
        return response()->json(['haha' => 'hehe']);
    }
}

>>>>>>> f3dc86f60dab9b56dfca3e9e0788ab3af48a54d9
