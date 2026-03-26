<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\RosterController;
use App\Http\Controllers\LeaveController;
use App\Http\Controllers\AttendenceController;
use App\Http\Controllers\SalaryController;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');


Route::get('/employees/', [EmployeeController::class, 'index']);

Route::get('/rosters/', [RosterController::class, 'index']);

Route::get('/leaves/', [LeaveController::class, 'index']);

Route::get('/attendences/', [AttendenceController::class, 'index']);

Route::get('/salaries/', [SalaryController::class, 'index']);