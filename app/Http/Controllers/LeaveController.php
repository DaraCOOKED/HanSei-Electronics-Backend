<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
<<<<<<< HEAD

class LeaveController extends Controller
{
    //

    public function index()
    {
        // return all attendances
        return response()->json(['haha' => 'fuck']);
=======
use App\Models\Leave;

class LeaveController extends Controller

{
    public function index()
    {
        return 'kko';
>>>>>>> 472568e1cc3cffe940681908cdee6ab635fdbefd
    }
}
