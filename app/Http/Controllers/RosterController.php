<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RosterController extends Controller
{
    //
    public function index()
    {
        // return all attendances
        return response()->json(['haha' => 'fuck']);
    }
}
