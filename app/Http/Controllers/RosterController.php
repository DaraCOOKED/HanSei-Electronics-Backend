<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> f3dc86f60dab9b56dfca3e9e0788ab3af48a54d9

class RosterController extends Controller
{
    //
<<<<<<< HEAD

    public function index()
    { 
        return 'good luck';
=======
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
>>>>>>> f3dc86f60dab9b56dfca3e9e0788ab3af48a54d9
    }
}
