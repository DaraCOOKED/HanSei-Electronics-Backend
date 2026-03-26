<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
<<<<<<< HEAD

class RosterController extends Controller
{
    //
    public function index()
    {
        // return all attendances
        return response()->json(['haha' => 'fuck']);
=======
use App\Models\Roster;

class RosterController extends Controller
{
    public function index()
    {
        return 'abc';
>>>>>>> 472568e1cc3cffe940681908cdee6ab635fdbefd
    }
}
