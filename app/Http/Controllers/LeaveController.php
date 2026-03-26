<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LeaveController extends Controller
{
    //

    public function index()
    {
        // return all attendances
        return response()->json(['haha' => 'fuck']);
    }
}
