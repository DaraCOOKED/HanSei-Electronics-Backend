<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Roster;

class RosterController extends Controller
{
    public function index()
    {
        return Roster::all();
    }
}
