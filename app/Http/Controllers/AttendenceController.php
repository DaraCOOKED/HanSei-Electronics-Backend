<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Attendence;

class AttendenceController extends Controller
{ 

  public function index()
  { 
    return Attendence::all();
  }
}