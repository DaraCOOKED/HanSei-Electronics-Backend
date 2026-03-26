<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AttendanceController extends Controller
{
    //


     public function index()
    {
        // return all attendances
        return response()->json(['haha' => 'hehe']);
    }
}

